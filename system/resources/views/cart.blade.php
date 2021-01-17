@extends('user.template.baseUser')

@section('content')

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            <a href="{{asset('public')}}/images/a.png" class="image-popup"><img src="{{asset('public')}}/images/a.png" class="img-fluid" alt="Colorlib Template"></a>
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3>HOODIE OFFWHITE GRADIENT WHITE PREMIUM HOODIE PRIA HYPE BRANDED MURAH</h3>
            <div class="rating d-flex">
              
              <p class="text-left mr-4">
                <a href="#" class="mr-2" style="color: #000;">Harga :  Rp. 450,000 <span style="color: #000;"> </span></a>
                <a href="#" class="mr-2" style="color: #000;">Stok : 499 <span style="color: #000;"> </span></a>
              </p>
              <p class="text-left">
                <a href="#" class="mr-2" style="color: #000;">Berat : 400.00000 mg <span style="color: #000;"></span></a>
              </p>
            </div>
            
            <p>Deskripsi HOODIE OFFWHITE GRADIENT WHITE PREMIUM HOODIE PRIA HYPE BRANDED MURAH

                HOODIE OFFWHITE GRADIENT WHITE PREMIUM GRADE 1:1
                + (Hantage , Label, Tag +)
                ••••••••••••••••••••••••••••••••<br>
                Price : 450K<br>

                Hoodie size chart<br>
                S. : P 68 x L 56<br>
                M : P 70 x L 58<br>
                L : P 72 x L 60<br>
                XL : P 74 x L 62<br>
                •••••••••••••••••••••••••••••• </p>

                 <a href="#" class="mr-2" style="color: #000;">Jumlah Barang : 1 <span style="color: #000;"></span></a>
              </p>
                  <a href="#" class="mr-2" style="color: #000;">Total : Rp. 450,000 <span style="color: #000;"></span></a>
              </p>

<div class="input-group col-md-6 d-flex mb-3">
<p><a href="cart" class="btn btn-black py-3 px-4">Pesan Sekarang</a></p>
</div>
<div class="w-100"></div>
  </div>
    <div class="w-100"></div>
      <div class="col-md-12 mt-5">
        <div class="card">
          <div class="card-header">
            Alamat 
          </div>
        
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
                <label for="" class="control-label">Provinsi</label>
                <select name="" class="form-control" id="provinsi" onchange="gantiProvinsi(this.value">
                  
                 
                  <option value="">KALIMANTAN BARAT</option>
                
                </select>
              </div>
              <div class="col-md-3">
                <label for="" class="control-label">Kabupaten/Kota</label>
                <select name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value">
                  
                  
                  <option value="">KETAPANG</option>
                
                </select>
              </div>
              <div class="col-md-3">
                <label for="" class="control-label">Kecamatan</label>
                <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value">
                  
                  <option value="">DELTA PAWAN</option>
                  
                </select>
              </div>
              <div class="col-md-3">
                <label for="" class="control-label">Desa</label>
                <select name="" class="form-control" id="desa">
                  <option value="">SAMPIT</option>
                  
                </select>
              </div>
               
            </div>
            
          </div>

          
        </div>

        
      </div>
      
    </div>
    
  </div>

@push('script')
<script>
    function gantiProvinsi(id) {
        $.get("api/provinsi/" +id, function(result) {
            result = JSON.parse(result);
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#Kabupaten").html(option)
        });
    }
    function gantiKabupaten(id) {
        $.get("api/kabupaten/" +id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#kecamatan").html(option)
        });
    }
    function gantiKecamatan(id) {
        $.get("api/kecamatan/" +id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#desa").html(option)
        });
    }
</script>
@endpush
          </div>
        </div>
      </div>
    </section>

@endsection