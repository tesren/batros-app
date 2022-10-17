<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content bg-blue text-white">

        <div class="modal-header">
          <div class="modal-title fs-4 text-lightblue fw-light" id="searchModalLabel">{{__('Busca tu unidad ideal')}}</div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form action="{{route('search')}}" method="get">
                @csrf
            
                {{-- Precio mínimo y máximo --}}
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <label class="fw-light fs-5" for="min_price">{{__('Rango de precios')}}</label>
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-contact" name="min_price" id="min_price" placeholder="Min." min="0" max="99999999"  required>
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-contact" name="max_price" id="max_price" placeholder="Max." min="6000000" max="99999999"  required>
                    </div>
                </div>

                {{-- Recámaras  --}}
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <label class="fw-light fs-5" for="bedrooms">{{__('Recámaras')}}</label>
                    </div>
                    <div class="col-12">
                        <select class="form-select-batros" name="bedrooms" id="bedrooms">
                            <option value="" selected>{{__('Seleccione')}}</option>
                            <option value="1">1+ Flex</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>

                {{-- Pisos mínimo y máximo --}}
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <label class="fw-light fs-5" for="min_floor">{{__('Rango de pisos')}}</label>
                    </div>
                    <div class="col-6">
                        <select class="form-select-batros" name="min_floor" id="min_floor">
                            <option value="" selected>Min.</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select class="form-select-batros" name="max_floor" id="max_floor">
                            <option value="" selected>Max.</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>

                {{-- Area mínimo y máximo --}}
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <label class="fw-light fs-5" for="min_const">{{__('Rango de m²')}}</label>
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-contact" name="min_const" id="min_const" placeholder="Min." min="0" max="500" >
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-contact" name="max_const" id="max_const" placeholder="Max." min="0" max="500" >
                    </div>
                </div>


                <button id="search_submit" type="submit" class="btn btn-blue w-100 shadow-7">{{__('Buscar')}}</button>
            </form>
        </div>
       
      </div>

    </div>

</div>