<x-WebLayout title="Survei">
    <!--====== SLIDER PART START ======-->
    <li></li>
    <li></li>
   
    <!--====== SLIDER PART ENDS ======--> 

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <h2>Survei</h2>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box" style="padding: 10px;">
          <div class="box-body">
              <div class="box-header with-border">
                 <tabel width="100%">
                                         <tbody><tr>
                                            <td width="100%">
                        <div class="form-group" style="margin-right: 10px;">
                          <label>Instansi</label>
                          <select class="form-control" name="instansi" style="width: 100%;" onchange="setLayanan(this.value)" required="">
                            <option disabled="" selected="" value=""> -Pilih-</option>
                                                            <option value="1"> Dinas Kependudukan dan Catatan Sipil </option>
                                                            <option value="3"> Polresta Medan</option>
                                                            <option value="2"> BPJS KETENAGAKERJAAN </option>
                                                            <option value="4"> BPJS KESEHATAN </option>
                                                      </select>
                        </div>
                      </td>
                    </tr>
                    </tabel>
                    <table width="100%">
                     <tr>
                        <td width="50%">
                            <!-- <div class="form-group" style="margin-right: 10px;">
                            <label>Nomor Identitas</label>
                            <input type="text" class="form-control" name="identitas" placeholder="identitas">
                        </div> -->

                                    <input type="hidden" name="resi" value="">
                                    <input type="hidden" class="form-control" name="identitas" placeholder="identitas">

                                    <div class="form-group" style="margin-right: 10px;">
                                      <label>Jenis Kelamin</label>
                                      <select class="form-control" required="" name="jenis_kelamin" style="width: 100%;">
                                        <option disabled="" selected="" value=""> -Pilih-</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                      </select>
                                    </div>
                                    
                                  <br>
                                </td>
                                <td width="50%">
                                  <div class="form-group" style="margin-right: 10px;">
                                  <br>
                                    <label>Umur</label>
                                    <input type="umur" class="form-control" name="umur" placeholder="umur" required="">
                                  </div>
                                  <br>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="form-group" style="margin-right: 10px;">
                                    <label>Pendidikan</label>
                                    <select class="form-control" required="" name="pendidikan" style="width: 100%;">
                                      <option disabled="" selected="" value=""> -Pilih-</option>
                                      <option value="1">SD Kebawah</option>
                                      <option value="2">SLTP</option>
                                      <option value="3">SLTA</option>
                                      <option value="4">D1 - D2 - D3</option>
                                      <option value="5">S-1</option>
                                      <option value="6">S-2 - Keatas</option>
                                    </select>
                                  </div>
                                  <br>
                                </td>

                                <td>
                                  <div class="form-group" style="margin-right: 10px;">
                                    <label>Pekerjaan</label>
                                    <select class="form-control" required="" name="pekerjaan" style="width: 100%;">
                                      <option disabled="" selected="" value=""> -Pilih-</option>
                                      <option value="1">PNS/TNI/Polri</option>
                                      <option value="2">Pegawai Swasta</option>
                                      <option value="3">Wiraswasta/Usahawan</option>
                                      <option value="4">Pelajar/Mahasiswa</option>
                                      <option value="5">ASN Kota Bandung</option>
                                      <option value="6">ASN Non Kota Bandung</option>
                                      <option value="7">Umum</option>
                                      <option value="99">Lainnya</option>
                                    </select>
                                  </div>
                                  <br>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  
                                  <br>
                                </td>

                              </tr>
                            </tbody></table>
              </div>

        <table>
                                                    <tbody><tr>
              <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">1. Bagaimana Persyaratan pelayanan yang baru saja anda terima:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[0]" value="1" required="">
                                                                    <input name="id_ref_jawaban[0]" class="mg-b-5" type="radio" value="1" required="">&nbsp;&nbsp;Sangat Mudah<br>
                                                                                          <input name="id_ref_jawaban[0]" class="mg-b-5" type="radio" value="2" required="">&nbsp;&nbsp;Mudah<br>
                                                                                          <input name="id_ref_jawaban[0]" class="mg-b-5" type="radio" value="3" required="">&nbsp;&nbsp;Sulit<br>
                                                                                          <input name="id_ref_jawaban[0]" class="mg-b-5" type="radio" value="4" required="">&nbsp;&nbsp;Sangat Sulit<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </li>
              </div>
              </td>
                        
                                           <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">2. Bagaimana Sistem, Mekanisme, dan Prosedur pelayanan yang baru saja anda terima:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[1]" value="2" required="">
                                                                                                                                                                                                                                            <input name="id_ref_jawaban[1]" class="mg-b-5" type="radio" value="5" required="">&nbsp;&nbsp;Sangat Mudah<br>
                                                                                          <input name="id_ref_jawaban[1]" class="mg-b-5" type="radio" value="6" required="">&nbsp;&nbsp;Mudah<br>
                                                                                          <input name="id_ref_jawaban[1]" class="mg-b-5" type="radio" value="7" required="">&nbsp;&nbsp;Sulit<br>
                                                                                          <input name="id_ref_jawaban[1]" class="mg-b-5" type="radio" value="8" required="">&nbsp;&nbsp;Sangat Sulit<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </li>
              </div>
              </td>
            </tr>
                        
                                          <tr>
              <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">3. Bagaimana kecepatan waktu Penyelesaian pelayanannya:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[2]" value="3" required="">
                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="id_ref_jawaban[2]" class="mg-b-5" type="radio" value="9" required="">&nbsp;&nbsp;Sangat Cepat<br>
                                                                                          <input name="id_ref_jawaban[2]" class="mg-b-5" type="radio" value="10" required="">&nbsp;&nbsp;Cepat<br>
                                                                                          <input name="id_ref_jawaban[2]" class="mg-b-5" type="radio" value="11" required="">&nbsp;&nbsp;Lambat<br>
                                                                                          <input name="id_ref_jawaban[2]" class="mg-b-5" type="radio" value="12" required="">&nbsp;&nbsp;Sangat Lambat<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </li>
              </div>
              </td>
                        
                                           <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">4. Bagaimana Kesesuaian Biaya/Tarif pelayanannya:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[3]" value="4" required="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="id_ref_jawaban[3]" class="mg-b-5" type="radio" value="13" required="">&nbsp;&nbsp;Sangat Sesuai<br>
                                                                                          <input name="id_ref_jawaban[3]" class="mg-b-5" type="radio" value="14" required="">&nbsp;&nbsp;Sesuai<br>
                                                                                          <input name="id_ref_jawaban[3]" class="mg-b-5" type="radio" value="15" required="">&nbsp;&nbsp;Tidak Sesuai<br>
                                                                                          <input name="id_ref_jawaban[3]" class="mg-b-5" type="radio" value="16" required="">&nbsp;&nbsp;Sangat Tidak Sesuai<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </li>
              </div>
              </td>
            </tr>
                        
                                          <tr>
              <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">5. Bagaimana produk hasil pelayanan yang diterima, apakah sesuai dengan ketentuan yang telah ditetapkan:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[4]" value="5" required="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="id_ref_jawaban[4]" class="mg-b-5" type="radio" value="17" required="">&nbsp;&nbsp;Sangat Sesuai<br>
                                                                                          <input name="id_ref_jawaban[4]" class="mg-b-5" type="radio" value="18" required="">&nbsp;&nbsp;Sesuai<br>
                                                                                          <input name="id_ref_jawaban[4]" class="mg-b-5" type="radio" value="19" required="">&nbsp;&nbsp;Tidak Sesuai<br>
                                                                                          <input name="id_ref_jawaban[4]" class="mg-b-5" type="radio" value="20" required="">&nbsp;&nbsp;Sangat Tidak Sesuai<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </li>
              </div>
              </td>
                        
                                           <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">6. Bagaimana Kompetensi Pelaksana pelayanannya:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[5]" value="6" required="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="id_ref_jawaban[5]" class="mg-b-5" type="radio" value="21" required="">&nbsp;&nbsp;Sangat Baik<br>
                                                                                          <input name="id_ref_jawaban[5]" class="mg-b-5" type="radio" value="22" required="">&nbsp;&nbsp;Baik<br>
                                                                                          <input name="id_ref_jawaban[5]" class="mg-b-5" type="radio" value="23" required="">&nbsp;&nbsp;Tidak Baik<br>
                                                                                          <input name="id_ref_jawaban[5]" class="mg-b-5" type="radio" value="24" required="">&nbsp;&nbsp;Sangat Tidak Baik<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </li>
              </div>
              </td>
            </tr>
                        
                                          <tr>
              <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">7. Bagaimana Perilaku Pelaksana dalam pelayanannya:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[6]" value="7" required="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="id_ref_jawaban[6]" class="mg-b-5" type="radio" value="25" required="">&nbsp;&nbsp;Sangat Baik<br>
                                                                                          <input name="id_ref_jawaban[6]" class="mg-b-5" type="radio" value="26" required="">&nbsp;&nbsp;Baik<br>
                                                                                          <input name="id_ref_jawaban[6]" class="mg-b-5" type="radio" value="27" required="">&nbsp;&nbsp;Tidak Baik<br>
                                                                                          <input name="id_ref_jawaban[6]" class="mg-b-5" type="radio" value="28" required="">&nbsp;&nbsp;Sangat Tidak Baik<br>
                                                                                                                                                                                                                                                                                                                                                                                                          </li>
              </div>
              </td>
                        
                                           <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">8. Bagaimana Penanganan Pengaduan, Saran dan Masukan pelayanan Mal Pelayanan Publik:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[7]" value="8" required="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="id_ref_jawaban[7]" class="mg-b-5" type="radio" value="29" required="">&nbsp;&nbsp;Sangat Baik<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="id_ref_jawaban[7]" class="mg-b-5" type="radio" value="30" required="">&nbsp;&nbsp;Baik<br>
                                                                                          <input name="id_ref_jawaban[7]" class="mg-b-5" type="radio" value="31" required="">&nbsp;&nbsp;Tidak Baik<br>
                                                                                          <input name="id_ref_jawaban[7]" class="mg-b-5" type="radio" value="32" required="">&nbsp;&nbsp;Sangat Tidak Baik<br>
                                                                                                                                                                                                                                  </li>
              </div>
              </td>
            </tr>
                        
                                          <tr>
              <td>
                <div class="list-group-item">
                <h4 class="tx-inverse">9. Bagaimana Sarana dan prasarana pelayanan Mal Pelayanan Publik:</h4>
                <li style="list-style:none">
                    <input type="hidden" name="id_ref_pertanyaan[8]" value="9" required="">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="id_ref_jawaban[8]" class="mg-b-5" type="radio" value="33" required="">&nbsp;&nbsp;Sangat Lengkap<br>
                                                                                          <input name="id_ref_jawaban[8]" class="mg-b-5" type="radio" value="34" required="">&nbsp;&nbsp;Lengkap<br>
                                                                                          <input name="id_ref_jawaban[8]" class="mg-b-5" type="radio" value="35" required="">&nbsp;&nbsp;Tidak Lengkap<br>
                                                                                          <input name="id_ref_jawaban[8]" class="mg-b-5" type="radio" value="36" required="">&nbsp;&nbsp;Sangat Tidak Lengkap<br>
                                                          </li>
              </div>
              </td>
                        
                              </tr><tr>
            <td colspan="2"> 
              <div style="padding: 10px; border: 0.2px solid #e0e0e0;">
                <h4 class="tx-inverse">10. Saran / Masukan / Apresiasi </h4>
                <textarea class="form-control" rows="3" name="saran_masukan" style="width: 100%;"></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2"> 
              <br>
                <center>
                  <button type="submit" class="btn btn-info btn-block">&nbsp;&nbsp; &nbsp;-&nbsp;&nbsp;Selesai&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</button> 
                </center>
            </td>
          </tr>
        </tbody></table>

               
              </div>
            </div>
        </div>
    </section>

    <!--====== PRODUCTS PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <!--====== SERVICES PART ENDS ======-->

</x-WebLayout>