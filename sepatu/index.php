<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
</head>

<style>
    fieldset {
        width: 40%;
        margin: 20px auto;
        border-radius: 10px;
    }
    select {
        width: 20%;
        margin: 5px auto;
    }
</style>

<body>
    <center>
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow p-3 mb-2 rounded mb-4">
            <div class="card-header border-0 shadow p-3 mb-1 rounded mb-4">
            
                Input Data Transaksi
                
            </div>
            <div class="card-body">
                <?= form_error('nama_pembeli'); ?>
                <?= form_error('no_hp'); ?>
                <?= form_error('jumlah'); ?>
                <form action="<?= base_url('sepatu/view'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama_pembeli">Nama Pembeli</label>
                        <input type="text" name="nama_pembeli" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk Sepatu</label>
                        <select name="merk" id="" class="form-control">
                            <option value="">Pilih Merk</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran Sepatu</label>
                        <select name="ukuran" id="" class="form-control">
                            <option value="0">Pilih Ukuran</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="33">33</option>
                            <option value="44">44</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>
                    <div colspan="3" align="center">
                    <br />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</center>
</body>
</html>