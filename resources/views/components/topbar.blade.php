<div>
    <section class="bg-gray-200 py-10">
        <div class="container m-auto grid grid-cols-2">
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ Storage::url($company->logo) }}" width="200" alt="">
                </a>
            </div>

            <div class="text-right">
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
