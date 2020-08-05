<?php

/* searchperusahaan.html */
class __TwigTemplate_bab1d82ac2119011c38aa157198238a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tpl/headerblank.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tpl/headerblank.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate({});\t
});
</script>
<div class=\"title\">Perusahaan</div>
<fieldset>
<legend>Pencarian</legend>
<table border=\"0\">
  <tr>
    <td nowrap=\"nowrap\">Cari :</td>
    <td nowrap=\"nowrap\"><input name=\"key\" type=\"text\" id=\"key\" size=\"28\" /></td>
    <td nowrap=\"nowrap\">Berdasarkan :</td>
    <td nowrap=\"nowrap\"><select name=\"berd\" id=\"berd\">
      <option value=\"npwp\">NPWP</option>
      <option value=\"nama_perusahaan\">Nama Perusahaan</option>
    </select>    </td>
    <td nowrap=\"nowrap\"><input type=\"button\" name=\"button2\" id=\"button2\" value=\"Cari\" class=\"button\" onclick=\"search_data()\" /></td>
    <td nowrap=\"nowrap\"><input type=\"button\" name=\"button4\" id=\"button4\" value=\"Bersihkan\" class=\"button\" onclick=\"clear_search()\" /></td>
  </tr>
</table>
</fieldset>

<table width=\"1000\" border=\"0\" id=\"ListData\"></table>
<div id=\"pager\"></div>
<div style=\"padding-top:20px; padding-bottom:20px;\">

*) Double klik pada baris data untuk memilih
</div>
<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 37
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/perusahaan/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','NPWP','Nama Perusahaan', 'Pimpinan', 'SIUP', 'Tgl SIUP', 'Alamat', 'Telp','Notaris','Kontak Person','', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id_perusahaan',index:'id_perusahaan',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'npwp',index:'npwp', width:90},
\t\t\t{name:'nama_perusahaan',index:'nama_perusahaan', width:170},
\t\t\t{name:'pimpinan',index:'pimpinan', width:160},
\t\t\t{name:'siup',index:'siup', width:160},
\t\t\t{name:'tgl_siup',index:'tgl_siup', width:160, hidden:true},
\t\t\t{name:'alamat_perusahaan',index:'alamat_perusahaan', width:100, hidden:true},
\t\t\t{name:'telp_perusahaan',index:'telp_perusahaan', width:160},
\t\t\t{name:'notaris',index:'notaris'},
\t\t\t{name:'kontak_person',index:'kontak_person', hidden:true},
\t\t\t{name:'email',index:'email', hidden:true},
\t\t\t{name:'add_date',index:'nama_status', width:120, hidden:true},
\t\t\t{name:'add_user',index:'add_user', width:80, hidden:true},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\twindow.opener.jQuery(\"#id_perusahaan\").val(jQuery(\"#ListData\").getCell(rowid,'id_perusahaan'));
\t\t\twindow.opener.jQuery(\"#nama_perusahaan\").val(jQuery(\"#ListData\").getCell(rowid,'nama_perusahaan'));
\t\t\twindow.close();
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Perusahaan\",
\t\theight:320,
\t\twidth:750,
\t\tmultiselect : false\t\t\t\t
\t});
\t
\treturn false;
}
function hapus_data(){
\tdata = jQuery(\"#ListData\").jqGrid('getGridParam','selarrrow');
\tif(data==\"\"){
\t\talert(\"Tentukan dulu data yang akan di hapus dengan mencentang\");
\t}
\telse{
\t\tif(confirm(\"Anda yakin?\"))
\t\t\tdelete_data(data);
\t\telse
\t\t\treturn false
\t}
}
function search_data(){
\tkey=jQuery(\"#key\").val();
\tby=jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 91
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/perusahaan/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 98
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/perusahaan/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 102
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/perusahaan/delete_data\",{ id : data},
\tfunction(output){
\t\tif(output!=\"\") alert(output);
\t\telse clear_search();
\t});
}
load_grid();
jQuery(\"#tgl_siup\").datepicker({ dateFormat: 'yy-mm-dd' });
</script>
";
    }

    public function getTemplateName()
    {
        return "searchperusahaan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 102,  133 => 98,  122 => 91,  64 => 37,  29 => 4,  26 => 3,);
    }
}
