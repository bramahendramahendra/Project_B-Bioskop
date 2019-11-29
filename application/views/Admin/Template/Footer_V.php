		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
		
		<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->

		<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

		<script src="<?= base_url(); ?>assets/admin/js/jquery.chained.min.js"></script>
		<script src="<?= base_url(); ?>assets/admin/js/main.js"></script>
		
		<script type="text/javascript">
            // $("#select-cinema").chained("#select-movie"); // disini kita hubungkan kota dengan provinsi
            $("#select-studio").chained("#select-cinema"); // disini kita hubungkan kecamatan dengan kota
        </script>

		<script type="text/javascript">
			$('#data-date').datepicker({
				todayBtn: "linked",
				keyboardNavigation: false,
				forceParse: false,
				calendarWeeks: true,
				autoclose: true,
				format: "yyyy-mm-dd"
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				// GET CREATE 
				$('.bootstrap-select').selectpicker('refresh');
			});
		</script>

		<script type="text/javascript">
			var slider = document.getElementById("rating");
			var output = document.getElementById("skor_rating");
			output.innerHTML = slider.value;

			slider.oninput = function() {
				output.innerHTML = this.value;
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.bootstrap-select').selectpicker();
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#select-cinema').change(function() {
					var id = $(this).val();
					$.ajax({
						url: "<?= base_url(); ?>Admin/JadwalTayang/get_studio",
						method: "POST",
						data: {
							id: id
						},
						async: false,
						dataType: 'json',
						success: function(data) {
							var html = '';
							var i;
							for (i = 0; i < data.length; i++) {
								html += '<option>' + data[i].kelas + '</option>';
							}
							$('#select-studio').html(html);

						}
					});
				});
			});
		</script>
		</body>

		</html>
