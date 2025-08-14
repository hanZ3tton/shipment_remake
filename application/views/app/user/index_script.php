 <script>
     const editBtn = document.getElementById('btnEdit');
     const deleteBtn = document.getElementById('btnDelete');
     const checkboxes = document.querySelectorAll('.select-user');
     const selectAll = document.getElementById('select-all');

     function updateButtons() {
         let selected = [...checkboxes].filter(c => c.checked).map(c => c.value);
         editBtn.style.display = selected.length === 1 ? 'inline-block' : 'none';
         deleteBtn.style.display = selected.length > 0 ? 'inline-block' : 'none';
         editBtn.href = selected.length === 1 ? "<?= base_url('app/user/edit/') ?>" + selected[0] : "#";
         deleteBtn.href = selected.length > 0 ? "<?= base_url('app/user/delete/') ?>" + selected.join(',') : "#";
     }

     checkboxes.forEach(c => c.addEventListener('change', updateButtons));
     selectAll.addEventListener('change', () => {
         checkboxes.forEach(c => c.checked = selectAll.checked);
         updateButtons();
     });
 </script>