<nav class="navbar navbar-default nav-vlb" role="navigation">
    <div class="container">
        <div class="col-xs-12 hidden-sm hidden-md hidden-lg p-l-none p-r-none">
            <a href="#" class="menu" data-toggle="modal" data-target="#menuMobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <span class="pull-right title">Villa Langit Biru</span>
        </div>
        <div class="hidden-xs col-sm-12 col-md-12 col-lg-12">
            <ul class="nav navbar-nav pull-center">
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">Our Villas</a>
                </li>
                <li>
                    <a href="blog.html">About Us</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@section('modals')
<div class="modal fade" id="menuMobile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop