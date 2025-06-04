<x-guest-layout>
    <h1 class="text-2xl text-center pb-3 font-bold text-on-surface-strong dark:text-on-surface-dark-strong">
        <span class="text-red-950">Agende seu corte!</span>
    </h1>
    <div id="smartwizard">
        
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#step-1">
                    <div class="num">1</div>
                    Data
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step-2">
                    <div class="num">2</div>
                    Horário
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step-3">
                    <div class="num">3</div>
                    Informações pessoais
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                <div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                    <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Data</label>
                    <input id="datepicker" type="text" class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="data"/>
                </div>
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                Step content2
            </div>
            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                Step content3
            </div>
        </div>
    </div>


</x-guest-layout>