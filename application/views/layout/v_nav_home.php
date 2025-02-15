 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
     <div class="container">
         <a href="<?= base_url() ?>" class="navbar-brand">
             <img src="<?= base_url() ?>assets/prolific/logo.png" height="37.5px">
         </a>

         <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse order-3" id="navbarCollapse">
             <!-- Left navbar links -->
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a href="<?= base_url() ?>" class="nav-link text-dark">Home</a>
                 </li>

                 <?php $kategori = $this->m_home->get_all_data_kategori(); ?>
                 <li class="nav-item dropdown">
                     <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-dark">Kategori</a>
                     <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                         <?php foreach ($kategori as $key => $value) { ?>
                             <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>" class="dropdown-item"><?= $value->nama_kategori ?></a></li>
                         <?php } ?>
                     </ul>
                 </li>

             </ul>

         </div>

         <!-- Right navbar links -->
         <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
             <!-- Messages Dropdown Menu -->
             <li class="nav-item dropdown">
                 <?php if ($this->session->userdata('email') == "") { ?>

                     <a class="nav-link" href="<?= base_url('pelanggan/login') ?>">
                         <span class="brand-text mr-1 text-dark">Login / Register</span>
                         <img src="<?= base_url() ?>assets/foto/foto_default.png" alt="User Avatar" class="brand-image img-circle elevation-3"
                             style="opacity: .8">
                     </a>

                <?php } else { ?>

                    <a class="nav-link" data-toggle="dropdown" href="#">
                         <span class="brand-text mr-1 font-weight-bold text-dark"><?= $this->session->userdata('nama_pelanggan') ?></span>
                         <img src="<?= base_url() ?>assets/foto/foto_default.png" alt="User Avatar" class="brand-image img-circle elevation-3"
                             style="opacity: .8">
                     </a>

                     <div class="dropdown-menu dropdown-menu-lg">
                         <a href="<?= base_url('Pesanan_saya') ?>" class="dropdown-item">
                             <i class="fas fa-shopping-cart mr-2"></i>Pesanan Saya
                         </a>
                         <div class="dropdown-divider"></div>
                         <a href="<?= base_url('pelanggan/logout') ?>" class="dropdown-item dropdown-footer">Log Out</a>
                     </div>

                 <?php } ?>

             </li>
             <?php $keranjang = $this->cart->contents();
                $jml_item = 0;
                foreach ($keranjang as $key => $value) {
                    $jml_item = $jml_item + $value['qty'];
                }
                ?>
             <li class="nav-item dropdown">
                 <a class="nav-link" data-toggle="dropdown" href="#">
                     <i class="fas fa-shopping-cart"></i>
                     <span class="badge badge-danger navbar-badge"><?= $jml_item ?></span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <?php if (empty($keranjang)) { ?>
                         <a href="#" class="dropdown-item text-center">
                             <p>Keranjang Belanja Kosong</p>
                         </a>
                         <?php } else {
                            foreach ($keranjang as $key => $value) {
                                $barang = $this->m_home->detail_barang($value['id']);
                            ?>
                             <!-- Barang start -->

                             <a href="#" class="dropdown-item">
                                 <div class="media">
                                     <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="User Avatar" class="img-size-50 mr-3">
                                     <div class="media-body">
                                         <h3 class="dropdown-item-title text-dark font-weight-bold">
                                             <?= $value['name'] ?>
                                         </h3>
                                         <p class="text-sm"><?= $value['qty'] ?> x Rp.<?= number_format($value['price'], 0) ?>.00</p>
                                         <p class="text-sm text-muted">Rp.<?= $this->cart->format_number($value['subtotal']); ?></p>
                                     </div>
                                 </div>
                             </a>
                             <div class="dropdown-divider"></div>

                         <?php } ?>

                         <!-- Barang End -->
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item">
                             <div class="media">
                                 <div class="media-body">
                                     <tr>
                                         <td colspan="2"> </td>
                                         <td class="right"><strong>Total : </strong></td>
                                         <td class="right"><strong>Rp.<?= $this->cart->format_number($this->cart->total()); ?></strong></td>
                                     </tr>
                                 </div>
                             </div>
                         </a>
                         <div class="dropdown-divider"></div>
                         <a href="<?= base_url('belanja') ?>" class="dropdown-item dropdown-footer">View Cart</a>
                         <a href="<?= base_url('belanja/cekout') ?>" class="dropdown-item dropdown-footer">Check Out</a>

                     <?php } ?>
                 </div>
             </li>
             <!-- Notifications Dropdown Menu -->

         </ul>
     </div>
 </nav>
 <!-- /.navbar -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="background: #e8e8e8;">
     <!-- Content Header (Page header) -->

     <!-- /.content-header -->
     <div class="content">
         <div class="container">