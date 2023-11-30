<style>
  /* <![CDATA[ */


  .gadget {
    box-shadow: 10px 10px 0 0 rgb(249 115 22);
  }

  /* ]]> */
</style>

<b:section id="sidebarnya">
  <b:widget id='Profile1' locked='false' title='Mengenai Saya' type='Profile'></b:widget>
  <b:widget id='Followers1' locked='false' title='Pengikut' type='Followers'></b:widget>
  <b:widget id='BlogArchive1' locked='false' title='Arsip Blog' type='BlogArchive'></b:widget>
</b:section>
<div class="gadget hidden rounded-xl border border-orange-500 overflow-hidden">
  <div class="judul p-2 bg-orange-500 text-white">Ini adalah judul</div>
  <div class="isi p-2">Ini adalah isinya</div>
</div>
<script>
  // <![CDATA[


  htmx.onLoad(() => {
    let semua_gadget = document.querySelectorAll('#sidebarnya .widget');
    semua_gadget.forEach(x => {
      x.classList.add('gadget', 'rounded-xl', 'border', 'border-orange-500', 'overflow-hidden', 'mb-3');
      x.querySelector('h2').classList.add('judul', 'p-2', 'bg-orange-500', 'text-white');
      x.querySelector('.widget-content').classList.add('isi', 'p-2', 'prose', 'max-w-full');
    });
  });
  // ]]>
</script>