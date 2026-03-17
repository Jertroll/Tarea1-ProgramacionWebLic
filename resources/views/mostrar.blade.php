<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxStyles
</head>
<body class="bg-white min-h-screen">

    <div class="p-6 max-w-2xl mx-auto">
        <flux:heading size="xl" class="mb-4">Datos Recibidos</flux:heading>

        @if(session()->has('contacto_data'))
            @php $datos = session('contacto_data'); @endphp
            
            <flux:card class="space-y-2">
                <flux:text><strong>Nombre:</strong> {{ $datos['nombre'] }}</flux:text>
                <flux:text><strong>Teléfono:</strong> {{ $datos['telefono'] }}</flux:text>
                <flux:text><strong>Dirección:</strong> {{ $datos['direccion'] }}</flux:text>
                <flux:text><strong>Email:</strong> {{ $datos['email'] }}</flux:text>
                <flux:text><strong>Estado Civil:</strong> {{ $datos['estado_civil'] }}</flux:text>
            </flux:card>
        @else
            <flux:text color="red">No hay datos. Por favor regrese al formulario.</flux:text>
        @endif
        
        <div class="mt-4">
            <flux:button href="{{ route('formulario') }}" variant="subtle">Volver</flux:button>
        </div>
    </div>

    @fluxScripts
</body>
</html>