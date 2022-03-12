<x-layout>
    <x-slot name="content">
        <article>
            <h1>
                {{ $post->title }}
            </h1>

            <p>
                <a href="#">
                    {{ $post->category->name }}
                </a>
            </p>

            <div>
                {!! $post->body !!}
            </div>
        </article>

        <p>
            <a href="/">Go back</a>
        </p>
    </x-slot>
</x-layout>

