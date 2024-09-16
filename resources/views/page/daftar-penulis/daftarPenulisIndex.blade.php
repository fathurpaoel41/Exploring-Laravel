@extends('template/main-layout')

@section('title', 'Daftar Penulis')

@section('template/content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Daftar Penulis</h2>
                <button class="btn btn-primary" onclick="window.location.href ='{{ route('Tambah-Penulis') }}' ">Buat Penulis Baru</button>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <table id="penulisTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated here -->
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination" id="pagination">
                    <!-- Pagination links will be populated here -->
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentPage = 1;
    let isLoading = false;

    function fetchData(page) {
        if (isLoading) return;
        isLoading = true;

        fetch(`/api/daftar-penulis/get?page=${page}`)
            .then(response => response.json())
            .then(data => {
                updateTable(data.data.data);
                updatePagination(data.data);
                currentPage = page;
                isLoading = false;
            })
            .catch(error => {
                console.error('Error:', error);
                isLoading = false;
            });
    }

    function updateTable(data) {
        const tableBody = document.querySelector('#penulisTable tbody');
        tableBody.innerHTML = '';
        data.forEach(penulis => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${penulis.id}</td>
                <td>${penulis.nama_penulis}</td>
                <td>${penulis.deskripsi_penulis}</td>
            `;
            tableBody.appendChild(row);
        });
    }

    function updatePagination(pageData) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';

        for (let i = 1; i <= pageData.last_page; i++) {
            const li = document.createElement('li');
            li.className = `page-item ${i === pageData.current_page ? 'active' : ''}`;
            li.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
            pagination.appendChild(li);
        }
    }

    document.getElementById('pagination').addEventListener('click', function(e) {
        e.preventDefault();
        if (e.target.tagName === 'A' && !isLoading) {
            const page = parseInt(e.target.getAttribute('data-page'));
            if (page !== currentPage) {
                fetchData(page);
            }
        }
    });

    fetchData(currentPage);
});
</script>
