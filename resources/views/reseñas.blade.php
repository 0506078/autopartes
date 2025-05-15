@extends('layouts.app')

@section('contenido')
    <h1>Reseñas de Productos</h1>

    <!-- Mostrar las reseñas existentes -->
    <div>
        <h2>Reseñas de nuestros clientes:</h2>
        @if(session('reviews'))
            @foreach(session('reviews') as $review)
                <div style="border: 1px solid #ddd; margin-bottom: 15px; padding: 10px;">
                    <p><strong>Calificación: {{ $review['rating'] }} / 5</strong></p>
                    <p>{{ $review['review'] }}</p>
                </div>
            @endforeach
        @else
            <p>Aún no hay reseñas.</p>
        @endif
    </div>

    <!-- Formulario para dejar una nueva reseña -->
    <h3>Deja tu reseña:</h3>
    <form action="{{ route('review.store') }}" method="POST">
        @csrf
        <div>
            <label for="rating">Calificación (1-5):</label>
            <input type="number" name="rating" min="1" max="5" required>
        </div>

        <div>
            <label for="review">Comentario:</label><br>
            <textarea name="review" rows="4" required></textarea>
        </div>

        <button type="submit">Enviar Reseña</button>
    </form>
@endsection
