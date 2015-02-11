
/*
 * Editor client script for DB table tbl_prisijungimai
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.tbl_prisijungimai.php",
		"table": "#tbl_prisijungimai",
		"fields": [
			{	"label": "Puslapis",
				"name": "puslapis"
			},
			{
				"label": "UserID",
				"name": "userid"
			},
			{
				"label": "Login",
				"name": "login"
			},
			{
				"label": "Password",
				"name": "password"
			},
			{
				"label": "E-Mail",
				"name": "email"
			},
			{
				"label": "Tel. No.",
				"name": "telno"
			},
			{
				"label": "Jur. ar Priv.",
				"name": "type_jur_priv",
				"def": "Privatus",
				"options": [
					"Privatus",
					"Juridinis"
				]
			},
			{
				"label": "Sched start",
				"name": "sch_start"
			},
			{
				"label": "Sched stop",
				"name": "sch_stop"
			},
			{
				"label": "Pastabos",
				"name": "pastabos"
			}
		]
	} );

	$('#tbl_prisijungimai').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.tbl_prisijungimai.php",
		"columns": [
			{
				"data": "puslapis"
			},
			{
				"data": "userid"
			},
			{
				"data": "login"
			},
			{
				"data": "password"
			},
			{
				"data": "email"
			},
			{
				"data": "telno"
			},
			{
				"data": "type_jur_priv"
			},
			{
				"data": "sch_start"
			},
			{
				"data": "sch_stop"
			},
			{
				"data": "pastabos"
			}
		],
		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));

