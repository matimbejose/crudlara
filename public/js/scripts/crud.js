document.addEventListener('DOMContentLoaded', function () {

    function resetarFormulario() {
        document.getElementById('crud_id').value = '';
        document.getElementById('nome').value = '';
        document.getElementById('whatsapp').value = '';
        document.getElementById('contato2').value = '';
        document.getElementById('cpf').value = '';
        document.getElementById('cep').value = '';
        document.getElementById('como_soube_empresa').value = '';
        toggleElementDisplay('btn-submit', true);
        toggleElementDisplay('btn-submit-edit', false);
        toggleElementDisplay('btn-delete', false);
        toggleElementDisplay('button-container', true);
        toggleElementDisplay('edit-button-container', false);
        toggleElementDisplay('delete-button-container', false);

        // Resetando e recarregando o selectpicker
        $('.selectpicker').val([]);
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

        // Recarregando o selectpicker com o valor correto
        $('.selectpicker').val([result.como_soube_empresa]);
        $('.selectpicker').selectpicker('refresh');
    }

    function toggleElementDisplay(elementId, show) {
        document.getElementById(elementId).style.display = show ? 'block' : 'none';
    }

    function sendAjaxRequest(method, url, data, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        xhr.setRequestHeader('Content-Type', 'application/json'); // Definindo como JSON
        xhr.onload = function () {
            if (xhr.status === 200) {
                callback(JSON.parse(xhr.responseText));
            }
        };
        xhr.send(JSON.stringify(data)); // Enviando dados como JSON
    }

    function handleCheckboxClick(event) {
        var crud_id = event.target.getAttribute('data-resultado-id');

        // Deseleciona todos os checkboxes exceto o que foi clicado
        document.querySelectorAll('.user-checkbox').forEach(function (box) {
            if (box !== event.target) {
                box.checked = false;
            }
        });

        // Se o checkbox foi marcado, preenche o formulário, senão, reseta o formulário
        if (event.target.checked) {
            sendAjaxRequest('GET', `/crud/${crud_id}`, null, function (response) {
                preencherFormulario(response);
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
        var formData = {
            nome: document.getElementById('nome').value,
            whatsapp: document.getElementById('whatsapp').value,
            contato2: document.getElementById('contato2').value,
            cpf: document.getElementById('cpf').value,
            cep: document.getElementById('cep').value,
            como_soube_empresa: document.getElementById('como_soube_empresa').value,
        };

        var crud_id = document.getElementById('crud_id').value;
        var method = crud_id ? 'PUT' : 'POST';
        var url = crud_id ? `/crud/${crud_id}` : '/crud';

        sendAjaxRequest(method, url, formData, function (response) {
            location.reload(); // Recarrega a página após a submissão
        });
    }

    function handleDelete(event) {
        var crud_id = document.getElementById('crud_id').value;
        if (crud_id && confirm('Tem certeza que deseja excluir este registro?')) {
            sendAjaxRequest('DELETE', `/crud/${crud_id}`, null, function (response) {
                location.reload(); // Recarrega a página após a exclusão
            });
        }
    }

    // Desmarcar todos os checkboxes ao carregar a página
    document.querySelectorAll('.user-checkbox').forEach(function (box) {
        box.checked = false;
    });

    // Restante do código
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
