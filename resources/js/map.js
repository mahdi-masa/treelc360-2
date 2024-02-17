
import '@neshan-maps-platform/mapbox-gl/dist/NeshanMapboxGl.css';
import nmp_mapboxgl from '@neshan-maps-platform/mapbox-gl';
const popup = new nmp_mapboxgl.Popup();

const map = new nmp_mapboxgl.Map({
    mapType: nmp_mapboxgl.Map.mapTypes.neshanVector,
    container: "map",
    zoom: 4,
    pitch: 0,
    center: [53.389, 32.6892],
    minZoom: 3,
    trackResize: true,
    mapKey: "web.1e5a1b010de742ca927ac655126a5911",
    poi: false,
    traffic: false,
    mapTypeControllerOptions: {
        show: false,
        position: 'bottom-left'
    }
});

map.fitBounds([
    [44.109225, 25.078237], // southwestern corner of the bounds
    [63.316632, 39.713003] // northeastern corner of the bounds
]);

map.on('load',async () => {
    loadTrees(map);
});

const PlantTypes = [
    {
      name: 'افرا',
      slug: 'maple',
    },
    {
      name: 'چنار',
      slug: 'plane_tree',
    },
    {
      name: 'گز',
      slug: 'tamarisk',
    },
    {
      name: 'اقاقیا',
      slug: 'locusts',
    },
    {
      name: 'توس',
      slug: 'birch',
    },
    {
      name: 'توسکا',
      slug: 'alder',
    },
    {
      name: 'تاغ',
      slug: 'blackthorn',
    },
    {
      name: 'بید',
      slug: 'willow',
    },
    {
      name: 'اکالیپتوس',
      slug: 'eucalyptus',
    },
    {
      name: 'نارون',
      slug: 'elm',
    },
    {
      name: 'ملچ',
      slug: 'black_locust',
    },
    {
      name: 'آزاد',
      slug: 'zelkova',
    },
    {
      name: 'نمدار',
      slug: 'lindens',
    },
    {
      name: 'راش',
      slug: 'beech',
    },
    {
      name: 'ممرز',
      slug: 'hornbeam',
    },
    {
      name: 'زبان گنجشک',
      slug: 'fraxinus_syriaca',
    },
    {
      name: 'آکاسیا',
      slug: 'acacia',
    },
    {
      name: 'حرا',
      slug: 'mangrove',
    },
    {
      name: 'داغداغان',
      slug: 'celtis_australis',
    },
    {
      name: 'انجیلی',
      slug: 'parrotia_persica',
    },
    {
      name: 'سرخدار',
      slug: 'yew',
    },
    {
      name: 'اورس',
      slug: 'juniper',
    },
    {
      name: 'سرو',
      slug: 'cedar',
    },
    {
      name: 'کاج',
      slug: 'pine',
    },
    {
      name: 'صنوبر',
      slug: 'populus',
    },
    {
      name: 'سپیدار',
      slug: 'populus_alba',
    },
    {
      name: 'پده',
      slug: 'populus_euphratica',
    },
    {
      name: 'شمشاد',
      slug: 'boxwood',
    },
    {
      name: 'ارغوان',
      slug: 'lilac',
    },
    {
      name: 'خرمالو',
      slug: 'loquat',
    },
    {
      name: 'گلابی',
      slug: 'pear',
    },
    {
      name: 'سیب',
      slug: 'apple',
    },
    {
      name: 'آلو',
      slug: 'plum',
    },
    {
      name: 'زردآلو',
      slug: 'apricot',
    },
    {
      name: 'آلوچه',
      slug: 'cherry_plum',
    },
    {
      name: 'هلو',
      slug: 'peach',
    },
    {
      name: 'شلیل',
      slug: 'nectarine',
    },
    {
      name: 'آلبالو',
      slug: 'prunus_cerasus',
    },
    {
      name: 'گیلاس',
      slug: 'cherry',
    },
    {
      name: 'نارنج',
      slug: 'bitter_orange',
    },
    {
      name: 'لیمو شیرین',
      slug: 'sweet_lemon',
    },
    {
      name: 'لیمو ترش',
      slug: 'sour_lemon',
    },
    {
      name: 'پرتقال',
      slug: 'orange',
    },
    {
      name: 'نارنگی',
      slug: 'mandarin_orange',
    },
    {
      name: 'نخل (خرما)',
      slug: 'date_palm',
    },
    {
      name: 'کُنار',
      slug: 'jujube',
    },
    {
      name: 'سنجد',
      slug: 'elaeagnus_angustifolia',
    },
    {
      name: 'عناب',
      slug: 'ziziphus_jujuba',
    },
    {
      name: 'بلوط',
      slug: 'oak',
    },
    {
      name: 'بنه',
      slug: 'pistacia_atlantica',
    },
    {
      name: 'بادام',
      slug: 'almond',
    },
    {
      name: 'پسته',
      slug: 'pistachio',
    },
    {
      name: 'فندق',
      slug: 'hazelnut',
    },
    {
      name: 'گردو',
      slug: 'walnut',
    },
    {
      name: 'انجیر',
      slug: 'fig',
    },
    {
      name: 'مو (انگور)',
      slug: 'grape',
    },
    {
      name: 'زیتون',
      slug: 'olive',
    },
    {
      name: 'انار',
      slug: 'pomegranate',
    },
    {
      name: 'توت',
      slug: 'mulberry',
    },
    {
      name: 'ازگیل',
      slug: 'medlar',
    },
    {
      name: 'زالزالک',
      slug: 'hawthorn',
    },
    {
      name: 'خرمالولوی جنگلی',
      slug: 'wild_loquat',
    },
    {
      name: 'گلابی جنگلی',
      slug: 'wild_pear',
    },
    {
      name: 'بادامک (بادام کوهی و تلخ)',
      slug: 'wild_almond',
    },
    {
      name: 'زرشک',
      slug: 'barberry',
    },
    {
      name: 'سماق',
      slug: 'sumac',
    },
    {
      name: 'دافنه',
      slug: 'daphne',
    },
    {
      name: 'استبرق',
      slug: 'asparagus',
    },
    {
      name: 'اسفند',
      slug: 'ferula_asafoetida',
    },
    {
      name: 'اسطوخودوس',
      slug: 'lavender',
    },
    {
      name: 'آنغوزه',
      slug: 'asafoetida',
    },
    {
      name: 'آويشن',
      slug: 'thyme',
    },
    {
      name: 'باريجه',
      slug: 'ferula_gummosa',
    },
    {
      name: 'پنيرک',
      slug: 'prickly_lettuce',
    },
    {
      name: 'رازیانه',
      slug: 'fennel',
    },
    {
      name: 'زرین گياه',
      slug: 'goldenseal',
    },
    {
      name: 'زعفران',
      slug: 'saffron',
    },
    {
      name: 'زنیان',
      slug: 'caraway',
    },
    {
      name: 'زوفا',
      slug: 'hyssop',
    },
    {
      name: 'زیره کوهی',
      slug: 'cumin',
    },
    {
      name: 'سیاهدانه',
      slug: 'black_cumin',
    },
    {
      name: 'شيرين بيان',
      slug: 'liquorice',
    },
    {
      name: 'خاکشیر',
      slug: 'psyllium',
    },
    {
      name: 'خارشتر',
      slug: 'prickly_poppy',
    },
    {
      name: 'کاکوتی',
      slug: 'wild_rue',
    },
    {
      name: 'کرفس کوهی',
      slug: 'wild_celery',
    },
    {
      name: 'کور',
      slug: 'cucumber',
    },
    {
      name: 'کهورک',
      slug: 'wild_lettuce',
    },
    {
      name: 'کنگر وحشی',
      slug: 'wild_artichoke',
    },
    {
      name: 'گشنیز',
      slug: 'coriander',
    },
    {
      name: 'گل محمدی',
      slug: 'rose',
    },
    {
      name: 'گل گاوزبان',
      slug: 'hibiscus',
    },
    {
      name: 'گل‌راعی',
      slug: 'wild_chamomile',
    },
    {
      name: 'ماریتیغال',
      slug: 'meadowsweet',
    },
    {
      name: 'مرزنگوش',
      slug: 'marjoram',
    },
    {
      name: 'مرزه',
      slug: 'oregano',
    },
    {
      name: 'مشگک',
      slug: 'musk_mallow',
    },
    {
      name: 'موسیر',
      slug: 'garlic',
    },
    {
      name: 'نسترن',
      slug: 'wild_rose',
    },
    {
      name: 'کنار',
      slug: 'Jujubat',
    },
];
  
function loadTrees(map)
{
    const images = ['T1.png', 'T2.png', 'T3.png', 'T4.png', 'T5.png', 'T6.png', 'T7.png', 'T8.png'];
    Promise.all(
        images.map((image) => new Promise((resolve, reject) => {
            map.loadImage(`https://files.lc360.ir/Map/${image}`, (error, loadedImage) => {
                if (error) reject(error);
                resolve(loadedImage);
            }) ;
        }))
    ).then((loadedImages) => {
        loadedImages.forEach((loadedImage, index) => {
            map.addImage(images[index], loadedImage);
        });
        map.addSource('trees', {
            type: 'geojson',
            data: 'https://api.forms.lc360.ir/api/v1/plants/map.geojson',
            cluster: true,
            // clusterMaxZoom: 20, // Max zoom to cluster points on
            clusterRadius: 50, // Radius of each cluster when clustering points (defaults to 50)
        });

        map.addLayer({
            id: 'clusters',
            type: 'symbol',
            source: 'trees',
            filter: ['has', 'point_count'],
            layout: {
            'text-field': ['get', 'point_count_abbreviated'],
            'icon-image': [
                'step',
                ['get', 'point_count'],
                'T4.png',
                1,
                'T2.png',
                5,
                'T3.png',
                10,
                'T1.png',
                20,
                'T5.png',
                50,
                'T6.png',
                100,
                'T7.png',
                1000,
                'T8.png'
            ],
            'icon-size': ['interpolate', ['exponential',2], ['zoom'], 2, 0.7, 24, 1.8],
            // 'text-font': ['DIN Offc Pro Medium', 'Arial Unicode MS Bold'],
            'text-size': 20
            },
            paint: {
                'text-color': '#fff'
            }
        });

        map.addLayer({
            id: 'unclustered-point',
            type: 'symbol',
            source: 'trees',
            layout: {
            'icon-image': ['concat', ['get', 'icon'], '.png'],
            'icon-size': ['interpolate', ['exponential',2], ['zoom'], 2, 0.7, 24, 1.5],
            'text-field': ['get', 'user_phone'],
            'text-size': 12,
            'text-offset': [0, 3.8]
            },
            paint: {
                'text-color': '#674241',
            },
            filter: ['!', ['has', 'point_count']],
        });

        map.on('click', 'clusters', (e) => {
            const features = map.queryRenderedFeatures(e.point, {
                layers: ['clusters']
            });
            const clusterId = features[0].properties.cluster_id;
            map.getSource('trees').getClusterExpansionZoom(
            clusterId,
            (err, zoom) => {
            if (err) return;
            
            map.easeTo({
            center: features[0].geometry.coordinates,
            zoom: zoom
            });
            }
            );
        });

        // map.on('click', 'unclustered-point', (e) => {
        //     const coordinates = e.features[0].geometry.coordinates.slice();
        //     console.log(PlantTypes);
        //     const plant_type = PlantTypes.value.find(plant => plant.slug === e.features[0].properties.type)?.name || 'سایر';
        //     const count = e.features[0].properties.count;
        //     const created_at = new Intl.DateTimeFormat('fa-IR', {dateStyle: 'short'}).format(new Date(e.features[0].properties.created_at))
        //     const phone = toPersianDigits(e.features[0].properties.user_phone);
        //     const name = e.features[0].properties.user_name ?? 'کاربر';
        //     // Ensure that if the map is zoomed out such that
        //     // multiple copies of the feature are visible, the
        //     // popup appears over the copy being pointed to.
        //     while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
        //     coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        //     }
            
        //     popup.setLngLat(coordinates)
        //         .setHTML(
        //         `اهدا  شده به زمین توسط ${name} <br>نوع: ${plant_type}<br>تعداد: ${count} اصله<br>تاریخ کاشت: ${created_at}<br>شماره تماس: <div style="direction: ltr; display: inline-block" > ${phone}</div>`
        //         )
        //         .addTo(map)
        // });
        function toPersianDigits(str) {
          const persianDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
          const englishDigits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        
          englishDigits.forEach((digit, index) => {
            str = str.toString().replace(new RegExp(digit, 'g'), persianDigits[index]);
          });
        
          return str;
        }
        map.on('click', 'unclustered-point', (e) => {
          const coordinates = e.features[0].geometry.coordinates.slice();
          const plant_type = e.features[0].properties.type_fa ?? 'سایر';
          const count = e.features[0].properties.count;
          const created_at = new Intl.DateTimeFormat('fa-IR', {dateStyle: 'short'}).format(new Date(e.features[0].properties.created_at))
          const phone = toPersianDigits(e.features[0].properties.user_phone);
          const name = e.features[0].properties.user_name ?? 'کاربر';
          // Ensure that if the map is zoomed out such that
          // multiple copies of the feature are visible, the
          // popup appears over the copy being pointed to.
          while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
          coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
          }
          
          popup.setLngLat(coordinates)
              .setHTML(
             ` اهدا  شده به زمین توسط ${name} <br>نوع: ${plant_type}<br>تعداد: ${count} اصله<br>تاریخ کاشت: ${created_at}<br>شماره تماس: <div class="iransans-normal sansnum-normal" style="direction: ltr; display: inline-block" > ${phone}</div>`
              )
              .addTo(map)
        });
            
        map.on('mouseenter', 'clusters', () => {
            map.getCanvas().style.cursor = 'pointer';
        });
        map.on('mouseleave', 'clusters', () => {
            map.getCanvas().style.cursor = '';
        });
    });
}

