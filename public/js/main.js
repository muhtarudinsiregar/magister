$(document).ready(function()
{
        $('input[type="checkbox"]').on('change', function()
            {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });

        
        $("#pilihJadwal").click(function(){
            if ($(this).is(':checked'))
            {
                $('#tanggalTes :input').prop('disabled', false);
            }
            else
            {
                $('#tanggalTes :input').prop('disabled', true);
            };

        });
        $("#pernyataan").click(function(){
            if ($(this).is(':checked'))
            {
                $('#buttonPernyataan :button').prop('disabled', false);
            }
            else
            {
                $('#buttonPernyataan #kirim').prop('disabled', true);
            };

        });
        $("#tambahProfesi ").click(function(e){
                e.preventDefault();
                $("#profesi").append('<div class="form-group"><label for="tahun_akademik" class="col-sm-1 control-label" id="">Asosiasi</label><div class="col-sm-3"><input type="text" name="asosiasi[]" id="input" class="form-control" id="asosiasi"></div><label for="" class="col-sm-2 control-label">No. anggota</label><div class="col-sm-2" id="no_anggota"><input type="text" name="no_anggota[]" id="input" class="form-control" id="no_anggota"></div><button class="btn btn-danger" type="button" id="hapusProfesi">Hapus</button></div>');
            });
            $(document).on("click","#hapusProfesi",function(){
                $(this).parent().remove();
            });

        var url = window.location;
        // Will only work if string in href matches with location
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

        // Will also work for relative and absolute hrefs
        $('ul.nav a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

});
