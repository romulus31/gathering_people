/**
 * @author Romulus
 */

// Loading a JSON file
//bikingtrails1
$(document).ready(function() {
  $('#BikingTrails1').click(function() {
    $.getJSON('bikingtrails1.json', function(data) {
      $('#bike_div_php').empty();
      $.each(data, function(entryIndex, entry) {
        var html = '<div class="entry">';
        html += '<h3 class="title">' + entry['title'] + '</h3>';
        
        html += '<div class="Description">';
        html += '<h4>' + entry['title_description'] + '</h4>';
        if (entry['Description']) {
          html += '<div class="description">';
          $.each(entry['Description'], function(lineIndex, line) {
            html += '<div class="description-line">' + line + '</div>';
          });
          
          html += '</div>';
        }
		html += '</br>';
		html += '<strong>' + entry['title_distance'] + '</strong>' + ':' + entry['Distance'];
        
        html += '</div>';
        html += '</div>';
        $('#bike_div_php').append(html);
      });
    });
    return false;
  });
});

//bikingtrails2
$(document).ready(function() {
  $('#BikingTrails2').click(function() {
    $.getJSON('bikingtrails2.json', function(data) {
      $('#bike_div_php').empty();
      $.each(data, function(entryIndex, entry) {
        var html = '<div class="entry">';
        html += '<h3 class="title">' + entry['title'] + '</h3>';
        
        html += '<div class="Description">';
        html += '<h4>' + entry['title_description'] + '</h4>';
        if (entry['Description']) {
          html += '<div class="description">';
          $.each(entry['Description'], function(lineIndex, line) {
            html += '<div class="description-line">' + line + '</div>';
          });
          
          html += '</div>';
        }
		html += '</br>';
		html += '<strong>' + entry['title_distance'] + '</strong>' + ':' + entry['Distance'];
        
        html += '</div>';
        html += '</div>';
        $('#bike_div_php').append(html);
      });
    });
    return false;
  });
});
	
//bikingtrails3
$(document).ready(function() {
  $('#BikingTrails3').click(function() {
    $.getJSON('bikingtrails3.json', function(data) {
      $('#bike_div_php').empty();
      $.each(data, function(entryIndex, entry) {
        var html = '<div class="entry">';
        html += '<h3 class="title">' + entry['title'] + '</h3>';
        
        html += '<div class="Description">';
        html += '<h4>' + entry['title_description'] + '</h4>';
        if (entry['Description']) {
          html += '<div class="description">';
          $.each(entry['Description'], function(lineIndex, line) {
            html += '<div class="description-line">' + line + '</div>';
          });
          
          html += '</div>';
        }
		html += '</br>';
		html += '<strong>' + entry['title_distance'] + '</strong>' + ':' + entry['Distance'];
        
        html += '</div>';
        html += '</div>';
        $('#bike_div_php').append(html);
      });
    });
    return false;
  });
});

// other trails

$(document).ready(function(){
	$('#other_trail_link').click(function()
		{
			$('#table_biking').load('other_trail.php');
			return false;
		});
	});
	
// table_hover
$(document).ready(function() {
		$("a.on").click(function(){	
			$("tr:nth-child(odd)").addClass("two");
			$("tr:nth-child(even)").addClass("one");	
			event.preventDefault();			
		});	
		$("a.off").click(function(){	
				$("tr:nth-child(odd)").removeClass("two");
				$("tr:nth-child(even)").removeClass("one");	
			});

	});


