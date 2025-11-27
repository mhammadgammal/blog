<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
    button.closest('form').addEventListener('submit', function(e) {
        if (!confirm('Are you sure you want to delete this item?')) {
            e.preventDefault();
        } else {
            alert('Item deleted successfully.');
        }
    });
});
</script>