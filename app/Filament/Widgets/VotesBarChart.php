<?php

namespace App\Filament\Widgets;

use App\Models\Kuesioner1;
use App\Models\Map;
use Filament\Widgets\ChartWidget;

class VotesBarChart extends ChartWidget
{
    protected static ?string $heading = 'Voted Pinpoint';

    protected int | string | array $columnSpan = 2;

    protected static ?string $maxHeight = '400px';

    protected function getData(): array
    {
        $raw = [];

        $votes = Kuesioner1::all();
        $maps = Map::all();

        foreach ($maps as $map) {
            $raw[$map->id] = 0;
        }

        foreach ($votes as $vote) {
            $raw[$vote->lokasi1] += 1;
            $raw[$vote->lokasi2] += 1;
            $raw[$vote->lokasi3] += 1;
            $raw[$vote->lokasi4] += 1;
            $raw[$vote->lokasi5] += 1;
        }

        arsort($raw);
        $top5 = array_slice($raw, 0, 10, true);

        $keys = array_keys($top5);
        $data = array_values($top5);

        $labels = [];

        foreach ($keys as $key) {
            foreach ($maps as $map) {
                if ($map->id == $key) {
                    $labels[] = $map->name;
                }
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Top voted pinpoin',
                    'data' => $data,
                    'borderColor' => [
                        'rgb(54, 162, 235)', // Existing colors
                        'rgb(255, 159, 64)',
                        'rgb(75, 192, 192)',
                        'rgb(153, 102, 255)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 206, 86)', // New colors
                        'rgb(75, 192, 192)',
                        'rgb(201, 203, 207)',
                        'rgb(255, 159, 64)',
                        'rgb(54, 162, 235)',
                    ],

                    'backgroundColor' => [
                        'rgb(54, 162, 235)', // Existing colors
                        'rgb(255, 159, 64)',
                        'rgb(75, 192, 192)',
                        'rgb(153, 102, 255)',
                        'rgb(255, 99, 132)',
                        'rgba(255, 206, 86, 0.2)', // New colors
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
