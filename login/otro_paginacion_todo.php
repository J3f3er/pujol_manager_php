<div class="card shadow" id="tabla-3">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Información del Talento</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                    <label class="form-label">Mostrar&nbsp;
                        <select class="d-inline-block form-select form-select-sm" id="limit">
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>&nbsp;
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-md-end dataTables_filter" id="dataTable_filter">
                    <label class="form-label">
                        <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Buscar...">
                    </label>
                </div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Office</th>
                        <th>Edad</th>
                        <th>Fecha Inicio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                    $limit = 10;
                    $offset = 0;
                    $talentos = Talento::getTalentos($limit, $offset);
                    foreach ($talentos as $talento) {
                       ?>
                        <tr>
                            <td><?= $talento['nombre']?></td>
                            <td><?= $talento['office']?></td>
                            <td><?= $talento['edad']?></td>
                            <td><?= $talento['fecha_inicio']?></td>
                            <td><?= $talento['acciones']?></td>
                        </tr>
                        <?php
                    }
                   ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><strong>#</strong></td>
                        <td><strong>Nombre</strong></td>
                        <td><strong>Office</strong></td>
                        <td><strong>Edad</strong></td>
                        <td><strong>Fecha Inicio</strong></td>
                        <td><strong>Acciones</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                    Demostración <?= $offset + 1?> to <?= min($offset + $limit, Talento::countTalentos())?> of <?= Talento::countTalentos()?>
                </p>
            </div>
            <div class="col-md-6">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <?php
                        $total_pages = ceil(Talento::countTalentos() / $limit);
                        for ($i = 0; $i <$total_pages; $i++) {
                            $offset = $i * $limit;
                            ?>
                            <li class="page-item <?= $i == 0 ? 'active' : ''?>">
                                <a class="page-link" href="#" data-offset="<?= $offset?>"><?= $i + 1?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    const limitSelect = document.querySelector('#limit');
    const tbody = document.querySelector('#tbody');
    const dataTableInfo = document.querySelector('#dataTable_info');
    const paginationLinks = document.querySelectorAll('.pagination a');

    limitSelect.addEventListener('change', () => {
        const limit = limitSelect.value;
        const offset = 0;
        updateTable(limit, offset);
    });

    paginationLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const limit = limitSelect.value;
            const offset = parseInt(link.dataset.offset);
            updateTable(limit, offset);
        });
    });

    function updateTable(limit, offset) {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `?limit=${limit}&offset=${offset}`, true);
        xhr.onload = () => {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                tbody.innerHTML = '';
                response.talentos.forEach(talento => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${talento.nombre}</td>
                        <td>${talento.office}</td>
                        <td>${talento.edad}</td>
                        <td>${talento.fecha_inicio}</td>
                        <td>${talento.acciones}</td>
                    `;
                    tbody.appendChild(row);
                });
                dataTableInfo.textContent = `Demostración ${response.from} to ${response.to} of ${response.total}`;
                paginationLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.dataset.offset == offset) {
                        link.classList.add('active');
                    }
                });
            }
        };
        xhr.send();
    }
</script>