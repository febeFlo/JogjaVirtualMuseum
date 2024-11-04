document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let checkedCount = 0;

    // Initialize the count based on the currently checked checkboxes
    checkboxes.forEach((checkbox) => {
        if (checkbox.checked) {
            checkedCount++;
        }
    });

    // Add event listener to each checkbox
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                checkedCount++;
                if (checkedCount > 5) {
                    this.checked = false;
                    checkedCount--; // Adjust the count if exceeded
                    alert('You can select up to 5 locations.');
                }
            } else {
                checkedCount--;
            }
        });
    });
});
