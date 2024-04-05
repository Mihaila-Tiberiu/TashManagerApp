document.addEventListener('DOMContentLoaded', function () {
    var editableCells = document.querySelectorAll('.editable');

    editableCells.forEach(function (cell) {
        cell.addEventListener('click', function () {
            this.contentEditable = true;

            var submitButton = this.parentNode.querySelector('.submit-btn');
            submitButton.style.display = 'block';

            document.querySelectorAll('.submit-btn').forEach(function (button) {
                if (button !== submitButton) {
                    button.style.display = 'none';
                }
            });
        });
    });

    var submitButtons = document.querySelectorAll('.submit-btn');
    submitButtons.forEach(function (button) {
        button.style.display = 'none';

        button.addEventListener('click', function () {
            var row = this.closest('tr');
            var taskId = row.dataset.taskId;

            var updatedData = {
                title: row.cells[0].innerText,
                description: row.cells[1].innerText,
                due_date: row.cells[2].innerText,
                status: row.cells[3].innerText
            };

            fetch('/updateTask/' + taskId, {
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(updatedData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                this.style.display = 'none';
            })
            .catch(error => {
                console.error('There was an error', error);
            });
        });
    });
});
