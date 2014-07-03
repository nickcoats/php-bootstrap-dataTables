// dataTables script with initial sorting set to the id column in descending order
$(document).ready(function() {		
 	$('#example').dataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
