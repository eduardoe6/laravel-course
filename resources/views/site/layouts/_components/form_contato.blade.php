{{$slot}}
<form action="{{route('site.contato')}}" method="post">
@csrf <!-- Token -->
    <label>
        <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="{{$classe_borda}}">
    </label>
    <br>
    <label>
        <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="{{$classe_borda}}">
    </label>
    <br>
    <label>
        <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$classe_borda}}">
    </label>
    <br>
    <label>
        <select name="motivo_contato" class="{{$classe_borda}}">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
    </label>
    <br>
    <label>
        <textarea name="mensagem"
                  class="{{$classe_borda}}"> {{ (old('mensagem') != '') ? old('mensagem') : "Preencha aqui a sua mensagem" }} </textarea>
    </label>
    <br>
    <button type="submit" class="{{$classe_borda}}">ENVIAR</button>
</form>
