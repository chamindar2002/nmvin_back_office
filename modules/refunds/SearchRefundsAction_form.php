<table class='container'>
<tr><td>
	<table class='contenttable' border = '0'>
	  <tr>
	  	<td><h3>Search Refunds</h3></td>
          </tr>
          <tr>
              <td>
                  <input type="text" name="txt_search" id="txt_search" class='textboxlarge'>
              </td>
          </tr>
          <tr>
              <td>
                  <input type="button" name="btn_search" id="btn_search" value="Search" onClick="load()" class="buttontype1">
              </td>
          </tr>
          <tr>
              <td><h3>Results</h3></td>
          </tr>
          <tr>
              <td>
                  <div id="results"></div>
              </td>
          </tr>
        </table>
    </td>
</tr>
</table>

<script type="text/javascript">
function load(){
    
    var id = $('#txt_search').val();
    
    $.ajax({
                    url: 'modules/refunds/fetchSearchResults.php?id=' + id + '',
                    data: "",
                    dataType: 'html',
                    beforeSend: function() {
                         $('#results').html('Loading data...');
                    },
                    success: function(data) {
                       $('#results').html(data);
                    }
                });
  
}
</script>