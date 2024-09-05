document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let checkedCount = 0;

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                checkedCount++;
                if (checkedCount > 5) {
                    this.checked = false;
                    alert('You can select up to 5 locations.');
                }
            } else {
                checkedCount--;
            }
        });
    });
});
