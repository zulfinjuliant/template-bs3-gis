<!-- menu di pisah -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">mobile menu</span>
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void()"><i class="glyphicon glyphicon-map-marker"></i>Logo GIS</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a href="javascript:void()" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i> wong java<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void()"><i class="glyphicon glyphicon-user"></i> java ipsum</a></li>
                    <li><a href="javascript:void()" value="Logout" onClick="Logout()"><i class="glyphicon glyphicon-log-out"></i> java ipsum</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- /menu -->
<!-- sidebar pisah -->
<div class="col-sm-3 col-md-3">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href=".menubar1"><span class="glyphicon glyphicon-folder-open"></span>Menu Ipsum Satu</a>
                </h4>
            </div>
            <div class="menubar1 panel-collapse collapse in">
                <div class="sidebar-body">
                    <table class="table">
                        <tr>
                            <td>
                                <i class="glyphicon glyphicon-check text-primary"></i><a href="javascript:void()" data-toggle="modal" data-target=".modal_grafik">Data Satu</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-check text-primary"></span><a href="javascript:void()" data-toggle="modal" data-target=".modal_grafik1">Data Dua</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href=".menubar2"><span class="glyphicon glyphicon-folder-open">
                    </span>Menu Ipsum Dua</a>
                </h4>
            </div>
            <div class="menubar2 panel-collapse collapse in">
                <div class="sidebar-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-check text-primary"></span><a href="javascript:void()" data-toggle="modal" data-target=".modal_grafik2">Data Tiga</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-check text-primary"></span><a href="javascript:void()" data-toggle="modal" data-target=".modal_pie">Data Empat</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /sidebar -->
<?php include "partials/modal.php";?>
<!-- /sidebar -->