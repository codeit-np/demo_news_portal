<div>
    <section class="bg-black py-5">
        <div class="container m-auto grid grid-cols-2">
            <div>
                <h1 class="text-yellow-200 text-4xl">Dharan Khabar</h1>
            </div>

            <div class="text-right text-white">
                <span>{{ $company->address }}</span>
                <span>For Ad:{{ $company->for_ad }}</span>

                <div>
                    Contacts
                    @foreach ($company->contacts as $company)
                        <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
