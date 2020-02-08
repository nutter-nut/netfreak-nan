<nav class="navbar fixed-top navbar-dark bg-secondary">
    
    {{-- ตรงนี้สามารถปรับปรุงให้ดีขึ้นได้อีก หากอยู่ที่ page ซีรีย์ อยู่แล้วก็ไม่ควร reload page --}}
    <a class="navbar-brand" href="{{ route('series') }}">Netfreak</a>
    
    <div>
        {{-- ทำได้เฉพาะ auth user เท่านั้น --}}
        {{-- ถ้าอยู่ที่ page สร้างซีรีย์ อยู่แล้วก็ไม่ควรมองเห็น --}}
        <a role="button" class="btn btn-primary" href="{{url('/series/create')}}">สร้างซีรีย์ใหม่</a>
        
        <span class="ml-4 navbar-text">
            แสดง username หรือ Guest
        </span>
    </div>
</nav>
