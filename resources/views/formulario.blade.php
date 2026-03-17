<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Contacto</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxStyles
</head>
<body class="bg-white min-h-screen">

    <div class="p-6 max-w-2xl mx-auto">
        <flux:heading size="xl" class="mb-6">Registro de Contacto</flux:heading>
        <br>

        <form action="{{ route('guardar.datos') }}" method="POST" class="space-y-6">
            @csrf 

            <flux:field>
                <flux:label>Nombre Completo</flux:label>
                <flux:input name="nombre" required />
            </flux:field>
            <br>
            <flux:field>
                <flux:label>Teléfono</flux:label>
                <flux:input type="tel" name="telefono" required />
            </flux:field>
            <br>
            <flux:field>
                <flux:label>Dirección</flux:label>
                <br>
                <flux:textarea name="direccion" required />
            </flux:field>
            <br><br>
            <flux:field>
                <flux:label>Email</flux:label>
                <flux:input type="email" name="email" required />
            </flux:field>
            <br>
            <flux:field>
                <flux:label>Estado Civil</flux:label>
                <flux:select name="estado_civil" required>
                    <option value="Soltero/a">Soltero/a</option>
                    <option value="Casado/a">Casado/a</option>
                    <option value="Divorciado/a">Divorciado/a</option>
                    <option value="Viudo/a">Viudo/a</option>
                </flux:select>
            </flux:field>
            <br>
            <flux:button type="submit" variant="primary">Registrar</flux:button>
        </form>
    </div>

    @fluxScripts
</body>
</html>