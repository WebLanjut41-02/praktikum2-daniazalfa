<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">tambah paket</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-heading">
            tambah paket
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">

                    <?php
                    if (!empty($notif)){
                        echo '<div class="alert alert-danger">';
                        echo $notif;
                        echo '</div>';
                    }
                    ?>
                    <form role="form" method="post" action="<php echo base_url('index.php/paket/simpan');" ?>">
                        <label>isi paket</label>
                        <input class="form-control" placeholder="isi paket" name="isipaket">
                        <label>sasaran pakett</label>
                        <select>
                            <option value=""></option>
                            <option value=""></option>
                        </select>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>