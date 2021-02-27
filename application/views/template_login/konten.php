<div class="login-box"><?php if (isset($konten)) {
                            $this->load->view($konten);
                        } else {
                            echo "File Konten Tidak Ada";
                        } ?></div>
<!--/.login-box -->