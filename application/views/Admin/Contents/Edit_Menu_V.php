<div class="container">
    <div class="col-md-8">
        <form action="">
            <div class="form-group">
                <label for="id">ID Film: </label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul Film: </label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="judul">Durasi: </label>
                <input type="text" class="form-control" placeholder="Dalam menit" required>
            </div>
            <div>
                <p><b>Genre: </b></p>
            </div>
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Action </label>
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Sci-Fi </label>
            </div>
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Romance </label>
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Horor </label>
            </div>
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Thriler </label>
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Animation </label>
            </div>
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Drama </label>
                <input type="checkbox" class="custom=control-input" >
                <label for="genre">Comedy </label>
            </div>
            <div class="form-check-inline">
                <div>
                    <br>
                    <p><b>Kategori:</b></p>
                </div>
                <div class="form-check-inline"> 
                    <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" name="optradio" value="kategori1" >Semua Umur (SU)
                    </label>
                    <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input" name="optradio" value="kategori3">Remaja (R-13)
                    </label>
                    <label class="form-check-label" for="radio3">
                    <input type="radio" class="form-check-input" name="optradio" value="kategori3">Dewasa (R-17)
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="rating">Rating: </label>
                    <input type="text" class="form-control" placeholder="1-10" required>
                </div>
                <div class="form-group">
                    <label for="sutra">Sutradara: </label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pemain">Pemeran: </label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="bahasa">Bahasa: </label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="sub">Subtitle: </label>
                    <input type="text" class="form-control" required>
                </div>
                <p><b>Image: </b></p>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label" for="image">Choose file image</label>
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis: </label>
                    <textarea name="sinopsis" cols="120" rows="4"></textarea>
                </div>
            <a href=""><button class="btn-danger">Cancel</button></a> <a href="Data Menu.html"><button class="btn-success">Next</button></a>
        </form>
    </div>
</div>