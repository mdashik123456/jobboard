@extends('admin-panel.layouts.app')

@section('main-section')
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Jobs</h5>
              <a  href="create-jobs.html" class="btn btn-primary mb-4 text-center float-right">Create Jobs</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">job title</th>
                    <th scope="col">category</th>
                    <th scope="col">company</th>
                    <th scope="col">job_region</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>job one</td>
                    <td>development</td>
                    <td>microsoft</td>
                    <td>New York</td>
                     <td><a href="#" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>job one</td>
                    <td>development</td>
                    <td>google</td>
                    <td>New York</td>
                    <td><a href="#" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                 <tr>
                    <th scope="row">3</th>
                    <td>job three</td>
                    <td>development</td>
                    <td>web coding</td>
                    <td>New York</td>
                    <td><a href="#" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



  </div>
<script type="text/javascript">

</script>
</body>
</html>
@endsection