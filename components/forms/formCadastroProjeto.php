
<!-- Inicio Row Inicial - formCadastroProjeto  -->

<div class="row">
    <form class="col s12" autocomplete="off">
      <div class="row">
          <div class="input-field col s12 m6">
              <input value="" placeholder="Nome do Projeto" id="nome_projeto" type="text" class="validate">
              <label for="nome_projeto">Adicionando novo projeto</label>
          </div>
          <div class="input-field col s12 m6">
              <div class="select-wrapper">
                  <select tabindex="-1">
                      <optgroup label="Projeto Web">
                          <option value="1">PHP</option>
                          <option value="3">Java EE</option>
                          <option value="3">Python Web</option>
                      </optgroup>
                      <optgroup label="Projeto Desktop">
                          <option value="3">Java SE</option>
                          <option value="3">Python</option>
                      </optgroup>
                  </select>
              </div>
              <label>Linguagem de programação</label>
          </div>

          <div class="input-field col s12">
              <textarea id="textarea2" placeholder="Descrição do projeto" class="materialize-textarea" data-length="150" maxlength="150"></textarea>
              <label for="textarea2">Comente sobre o projeto</label>
              <span class="character-counter" style="float: right; font-size: 12px;">Máximo 150 caracteres</span>
          </div>

         <div class="center input-field col s12">
         <button class="btn waves-effect waves-light" type="submit" name="actionRNF">Criar Novo Projeto
            <i class="material-icons right">send</i>
          </button>
         </div>

      </div>

    </form>
    <!-- Fim Row Inicial - formCadastroProjeto -->

</div>
