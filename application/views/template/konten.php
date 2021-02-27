<!--Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php if (isset($konten)) {
        $this->load->view($konten);
    } else {
        echo "File Konten Tidak Ada";
    } ?></div>
<!--/.content-wrapper -->