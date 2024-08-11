document.addEventListener('DOMContentLoaded', function () {
    var webRoot = document.getElementById('config').getAttribute('data-web-root');

    function resetarFormulario() {
        document.getElementById('crud_id').value = '';
        document.getElementById('nome').value = '';
        document.getElementById('whatsapp').value = '';
        document.getElementById('contato2').value = '';
        document.getElementById('cpf').value = '';
        document.getElementById('cpf').value = '';
        document.getElementById('como_soube_empresa').value = '';
        toggleElementDisplay('btn-submit', true);
        toggleElementDisplay('btn-submit-edit', false);
        toggleElementDisplay('btn-delete', false);
        toggleElementDisplay('button-container', true);
        toggleElementDisplay('edit-button-container', false);
        toggleElementDisplay('delete-button-container', false);

        $('.selectpicker').selectpicker('refresh');
    }

    function preencherFormulario(result) {
        document.getElementById('crud_id').value = result.id;
        document.getElementById('nome').value = result.nome;
        document.getElementById('whatsapp').value = result.whatsapp;
        document.getElementById('contato2').value = result.contato2;
        document.getElementById('cpf').value = result.cpf;
        document.getElementById('cep').value = result.cep;
        document.getElementById('como_soube_empresa').value = result.como_soube_empresa;
        toggleElementDisplay('btn-submit', false);
        toggleElementDisplay('btn-submit-edit', true);
        toggleElementDisplay('btn-delete', true);
        toggleElementDisplay('button-container', false);
        toggleElementDisplay('edit-button-container', true);
        toggleElementDisplay('delete-button-container', true);

        $('.selectpicker').val([result.como_soube_empresa]);
        $('.selectpicker').selectpicker('refresh');
    }

    function toggleElementDisplay(elementId, show) {
        document.getElementById(elementId).style.display = show ? 'block' : 'none';
    }

    function sendAjaxRequest(method, url, data, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                callback(JSON.parse(xhr.responseText));
            }
        };
        xhr.send(data);
    }

    function handleCheckboxClick(event) {
        var crud_id = event.target.getAttribute('data-resultado-id');
        if (event.target.checked) {
            sendAjaxRequest('POST', webRoot + 'crud/actions.php', 'action=get&crud_id=' + encodeURIComponent(crud_id), function (response) {
                if (response.success) {
                    preencherFormulario(response.data);
                } else {
                    alert(response.message);
                }
            });
        } else {
            resetarFormulario();
        }
    }

    function handleCheckboxChange(event) {
        if (event.target.checked) {
            document.querySelectorAll('.user-checkbox').forEach(function (box) {
                if (box !== event.target) {
                    box.checked = false;
                }
            });
        } else {
            resetarFormulario();
        }
    }

    function handleSubmit(event, action) {
        event.preventDefault();
        document.getElementById('action').value = action;
        document.querySelector('form').submit();
    }

    function handleDelete(event) {
        var crud_id = document.getElementById('crud_id').value;
        console.log('handleDelete called'); // Debug
        if (crud_id && confirm('Tem certeza que deseja excluir este registro?')) {
            console.log('Sending delete request'); // Debug
            sendAjaxRequest('POST', webRoot + 'crud/actions.php', 'crud_id=' + encodeURIComponent(crud_id) + '&action=delete', function (response) {
                console.log('Response received', response); // Debug
                if (response.success) {
                    console.log('Reloading the page'); // Debug
                    location.reload(); // Força o recarregamento da página
                } else {
                    alert(response.message);
                }
            });
        }
    }

    resetarFormulario();

    document.querySelectorAll('.user-checkbox').forEach(function (checkbox) {
        checkbox.addEventListener('click', handleCheckboxClick);
        checkbox.addEventListener('change', handleCheckboxChange);
    });

    document.getElementById('btn-submit-edit').addEventListener('click', function (event) {
        handleSubmit(event, 'update');
    });

    document.getElementById('btn-submit').addEventListener('click', function (event) {
        handleSubmit(event, 'create');
    });

    document.getElementById('btn-delete').addEventListener('click', handleDelete);
});
