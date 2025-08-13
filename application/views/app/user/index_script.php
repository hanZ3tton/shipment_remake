 <script>
     const editBtn = document.getElementById('btnEdit');
     const deleteBtn = document.getElementById('btnDelete');
     const checkboxes = document.querySelectorAll('.select-user');
     const selectAll = document.getElementById('select-all');

     function updateButtons() {
         let selected = [...checkboxes].filter(c => c.checked).map(c => c.value);
         editBtn.style.display = selected.length === 1 ? 'inline-block' : 'none';
         deleteBtn.style.display = selected.length > 0 ? 'inline-block' : 'none';
     }

     checkboxes.forEach(c => c.addEventListener('change', updateButtons));

     selectAll.addEventListener('change', () => {
         checkboxes.forEach(c => c.checked = selectAll.checked);
         updateButtons();
     });
 </script>