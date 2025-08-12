    <script>
        document.getElementById('select-all').addEventListener('click', function(e) {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            checkboxes.forEach(cb => cb.checked = e.target.checked);
        });
    </script>