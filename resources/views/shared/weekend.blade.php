@inject('date',App\utilities\date)

@if($date::isWeekend())
    {{ "c'estt le week end" }}
@else
    {{ "ce n'est pas le weekend" }}
@endif