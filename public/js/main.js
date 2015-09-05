$(document).ready(function()
{
 $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn(850);
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut(850);
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
        $('input[type="checkbox"]').on('change', function()
            {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });

        $( "#tanggalLahir" ).datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: '1945:2015'
            });

        $("#statusKerja").click(function(){
            if ($(this).is(':checked'))
            {
                $('#inputPekerjaan :input').prop('disabled', true);
            }
            else
            {
                $('#inputPekerjaan :input').prop('disabled', false);
            };

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
                $("#profesi").append('<div class="form-group"><label for="tahun_akademik" class="col-sm-1 control-label" id="">Asosiasi</label><div class="col-sm-3"><input type="text" name="" id="input" class="form-control" id="asosiasi"></div><label for="tahun_akademik" class="col-sm-2 control-label">No. anggota</label><div class="col-sm-2" id="no_anggota"><input type="text" name="" id="input" class="form-control" id="no_anggota"></div><button class="btn btn-danger" type="button" id="hapusProfesi">Remove</button></div>');
            });
            $(document).on("click","#hapusProfesi",function(){
                $(this).parent().remove();
            });
});