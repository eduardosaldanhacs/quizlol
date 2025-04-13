<x-main-layout pageTitle="Countries & regions Quiz">

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8 text-center">
                <form action="{{ route('prepare_name') }}" method="post">

                    @csrf

                    <div class="mt-3 mb-5">
                        <label class="form-label display-6 mb-3" for="total_questions">Número de perguntas:</label>
                        <input class="form-control form-control-lg text-center" type="number" name="total_questions" id="total_questions" min="3" max="30" value="10" required>
                        @error('total_questions')
                            <div class="text-danger text-center">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary px-5" type="submit" id="btn-start-game">INICIAR QUIZ</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 

</x-main-layout>