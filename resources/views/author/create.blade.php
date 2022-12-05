@extends('layouts.app')

@section('content')
  <div class="flex items-center justify-center">
    <div class="block  p-6 rounded-lg shadow-lg bg-white max-w-md">
      <form method="POST" action="/authors" enctype="multipart/form-data" >
        @csrf
        <div class="form-group mb-6">
          <input type="text" name="name" value=" {{ old('name') }}" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
            placeholder="Nom de l'auteur">
            @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <div class="form-group mb-6">
          <input type="text" name="country" value=" {{ old('country') }}" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
            placeholder="pays de l'auteur">
            @error('country')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <div class="form-group mb-6">
          <label for="bornDate">Date de naissance</label>
          <input name="bornDate" value=" {{ old('bornDate') }}" type="date" id="dateOfDeath" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
            >
            @error('bornDate')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <div class="form-group mb-6">
          <label for="dateOfDeath" value=" {{ old('dateOfDeath') }}">Date de décès</label>
          <input name="dateOfDeath" type="date" id="dateOfDeath" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
            >
            
        </div>
        <div class="form-group mb-6">
          <textarea
          class="
            form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
          "
          id="exampleFormControlTextarea13"
          rows="3"
          placeholder="Description de l'auteur"
          name="description"
          >{{ old('description') }}</textarea>
          @error('description')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="flex justify-center">
          <div class="mb-3 w-96">
            <label for="image" class="form-label inline-block mb-2 text-gray-700">Image de l'auteur</label>
            <input name="image" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="image">
          </div>
          @error('image')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="flex justify-center">
          <div class="mb-3 xl:w-96">
            <select name="courant" class="form-select appearance-none
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding bg-no-repeat
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                <option value="humanisme" selected>L'humanisme</option>
                <option value="Pleades">Pléades</option>
                <option value="Classicisme">Classicisme</option>
                <option value="Baroque">Baroque</option>
                <option value="Lumiere">Lumière</option>
                <option value="Romantisme">Romantisme</option>
                <option value="Realisme">Realisme</option>
                <option value="Naturalisme">Naturalisme</option>
                <option value="Symbolisme">Symbolisme</option>
                <option value="Parnasse">Parnasse</option>
                <option value="Dada">Dada</option>
                <option value="Surealisme">Suréalisme</option>
                <option value="Nouveau Roman">Nouveau Roman</option>
            </select>
          </div>
          @error('courant')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      
        <button type="submit" class="
          w-full
          px-6
          py-2.5
          bg-blue-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-blue-700 hover:shadow-lg
          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-blue-800 active:shadow-lg
          transition
          duration-150
          ease-in-out">Enregistrer</button>
      </form>
    </div>
  </div>
@endsection