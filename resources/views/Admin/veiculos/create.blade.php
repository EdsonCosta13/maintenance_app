<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h5>Registar veiculo</h5>
    <form method="post" action="{{ route('vehicle.store') }}">
        @csrf
        <input type="text" placeholder="Placa" name="placa">

        <select name="" id="">
            <option value="">--------Seleccione a marca--------</option>
            @foreach ($marcas as $marca)
                <option value="{{ $marca->admin_marca_id }}">{{ $marca->designacao }}</option>
            @endforeach
        </select>

        <select name="" id="" name="modelo">
            <option value="">Seleccione o modelo</option>
            @foreach ($modelos as $modelo)
                <option value="{{ $modelo->admin_modelo_id }}">{{ $modelo->designacao }}</option>
            @endforeach
        </select>

        <select name="" id="" name="versao">
            <option value="">Seleccione a versao</option>
            @foreach ($versaos as $versao)
                <option value="{{ $versao->admin_versao_id}}">{{ $versao->designacao }}</option>
            @endforeach
        </select>

        <input type="submit" value="Registar">


    </form>
</body>

</html>
