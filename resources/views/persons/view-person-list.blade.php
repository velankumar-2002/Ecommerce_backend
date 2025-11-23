@extends('layouts.default')

@section('main-section')
<div class="container-fluid py-1">
  <div class="row">
    <div class="col-12">
      <div class="card my-1">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          {{-- <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
            <h6 class="text-white text-capitalize ps-3 mb-0">Persons List</h6>
            <a href="#" class="btn btn-light btn-sm me-3 text-primary fw-bold">
              + Add New
            </a>
          </div> --}}
        </div>

        <div class="card-body px-3 pb-2">
          <div class="table-responsive p-0">
            <table id="personsTable" class="table table-striped align-items-center mb-0 w-100">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobile</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                </tr>
              </thead>
              <tbody>
                @foreach($persons as $person)
                <tr>
                  <td class="align-middle text-center">{{ $loop->iteration }}</td>
                  <td class="align-middle">{{ $person->name }}</td>
                  <td class="align-middle">{{ $person->email }}</td>
                  <td class="align-middle">{{ $person->mobile_no }}</td>
                  <td class="align-middle">{{ $person->created_at->format('d M Y') }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection


@section('main-scripts')
  {{-- ✅ DataTables CDN --}}
  <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

  {{-- ✅ DataTables CSS --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">

  <script>
    $(document).ready(function() {
        $('#personsTable').DataTable({
            responsive: true,
            pageLength: 5,
            lengthMenu: [5, 10, 25, 50],
            order: [[0, 'asc']],
            language: {
              search: "_INPUT_",
              searchPlaceholder: "Search persons..."
            }
        });
    });
  </script>
@endsection
