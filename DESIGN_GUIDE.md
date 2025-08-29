# FamilyBudget - Дизайн-гайд

## Обзор дизайн-системы

FamilyBudget использует современный темный дизайн с акцентом на синий цвет (#3B82F6) и минималистичный подход. Дизайн вдохновлен космической тематикой с анимированными звездами и градиентами.

## Цветовая палитра

### Основные цвета

- **Фон**: `bg-gray-900` (#111827) - основной темный фон
- **Вторичный фон**: `bg-gray-800` (#1F2937) - для карточек и секций
- **Акцентный цвет**: `bg-blue-500` (#3B82F6) - основной брендинг
- **Акцентный цвет (hover)**: `bg-blue-600` (#2563EB) - для интерактивных элементов

### Текстовые цвета

- **Основной текст**: `text-white` (#FFFFFF)
- **Вторичный текст**: `text-gray-300` (#D1D5DB)
- **Третичный текст**: `text-gray-400` (#9CA3AF)
- **Градиентный текст**: `bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent`

### Границы

- **Основные границы**: `border-gray-700` (#374151)
- **Активные границы**: `border-blue-500` (#3B82F6)
- **Разделители**: `border-gray-800` (#1F2937)

## Типографика

### Шрифт

- **Основной шрифт**: Figtree (400, 500, 600, 700)
- **Fallback**: system-ui, sans-serif

### Размеры заголовков

- **H1**: `text-5xl md:text-6xl lg:text-7xl font-bold` (48px/60px/72px)
- **H2**: `text-4xl md:text-5xl font-bold` (36px/48px)
- **H3**: `text-xl font-semibold` (20px)
- **H4**: `text-lg font-semibold` (18px)

### Размеры текста

- **Основной текст**: `text-xl md:text-2xl` (20px/24px)
- **Обычный текст**: `text-base` (16px)
- **Мелкий текст**: `text-sm` (14px)

## Компоненты

### Навигация

```html
<nav
  class="sticky top-0 z-50 border-b border-gray-800 bg-gray-900/95 backdrop-blur-sm"
></nav>
```

- Полупрозрачный фон с размытием
- Фиксированное позиционирование
- Высокий z-index (50)

### Логотип

```html
<div class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-500">
  <!-- SVG иконка -->
</div>
<span class="text-xl font-bold">FamilyBudget</span>
```

- Квадратная иконка с закругленными углами (rounded-lg)
- Синий фон
- Белый текст рядом

### Кнопки

#### Основная кнопка

```html
<a
  class="rounded-lg bg-blue-500 px-6 py-2 font-medium text-white transition-colors hover:bg-blue-600"
></a>
```

- Синий фон с hover эффектом
- Закругленные углы (rounded-lg)
- Плавные переходы

#### Вторичная кнопка

```html
<a class="text-gray-300 transition-colors hover:text-white"></a>
```

- Только текст с hover эффектом
- Без фона

#### CTA кнопка (большая)

```html
<a
  class="transform rounded-xl bg-white px-8 py-4 text-lg font-semibold text-blue-600 shadow-lg transition-all hover:scale-105 hover:bg-gray-100"
></a>
```

- Белый фон с синим текстом
- Увеличение при hover (scale-105)
- Тень

### Карточки

```html
<div
  class="rounded-2xl border border-gray-700 bg-gray-800 p-8 transition-colors hover:border-blue-500"
></div>
```

- Темно-серый фон
- Большие отступы (p-8)
- Сильно закругленные углы (rounded-2xl)
- Граница с hover эффектом

### Иконки в карточках

```html
<div
  class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500"
>
  <!-- SVG иконка -->
</div>
```

- Квадратные иконки 48x48px
- Синий фон
- Закругленные углы (rounded-xl)
- Отступ снизу (mb-6)

### Нумерованные шаги

```html
<div
  class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-blue-500 text-2xl font-bold text-white"
></div>
```

- Круглые элементы 80x80px
- Синий фон
- Белый текст
- Центрирование

## Макеты и сетки

### Контейнеры

```html
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"></div>
```

- Максимальная ширина 1280px
- Автоматические отступы
- Адаптивные боковые отступы

### Сетки

- **2 колонки**: `grid md:grid-cols-2`
- **3 колонки**: `grid md:grid-cols-3`
- **4 колонки**: `grid md:grid-cols-2 lg:grid-cols-4`
- **Отступы**: `gap-8`

### Секции

```html
<section class="py-20"></section>
```

- Вертикальные отступы 80px (py-20)
- Для альтернативных секций: `py-20 bg-gray-800/50`

## Анимации и эффекты

### Переходы

- **Цвета**: `transition-colors`
- **Все свойства**: `transition-all`
- **Трансформации**: `transform hover:scale-105`

### Анимированные звезды

- Используются CSS анимации с keyframes
- Позиционирование через calc()
- Разные задержки для каждой звезды

### Градиенты

- **Текст**: `bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent`
- **Фон**: `bg-gradient-to-r from-blue-600 to-blue-700`

## Формы

### Поля ввода

```html
<input
  class="w-full rounded-lg border border-gray-700 bg-gray-800 px-4 py-3 text-white placeholder-gray-400 transition-colors focus:border-blue-500 focus:outline-none"
/>
```

- Темный фон
- Границы с focus состоянием
- Плейсхолдер серого цвета
- Плавные переходы

## Адаптивность

### Брейкпоинты

- **sm**: 640px
- **md**: 768px
- **lg**: 1024px
- **xl**: 1280px

### Адаптивные классы

- `text-5xl md:text-6xl lg:text-7xl`
- `text-xl md:text-2xl`
- `flex-col sm:flex-row`
- `grid md:grid-cols-3`

## Специальные эффекты

### Backdrop blur

```html
<div class="bg-gray-900/95 backdrop-blur-sm"></div>
```

- Полупрозрачный фон с размытием

### Sticky позиционирование

```html
<nav class="sticky top-0 z-50"></nav>
```

- Прилипающая навигация

### Overflow hidden

```html
<section class="overflow-hidden"></section>
```

- Скрытие выходящих за границы элементов

## Структура страницы

### Типичная структура

1. **Навигация** - фиксированная, полупрозрачная
2. **Hero секция** - полный экран с анимированными звездами
3. **Секции контента** - чередующиеся фоны
4. **CTA секция** - градиентный фон
5. **Футер** - темный фон с разделами

### Отступы между секциями

- **Между секциями**: `py-20` (80px сверху и снизу)
- **Внутри секций**: `px-4 sm:px-6 lg:px-8` (боковые отступы)

## Иконки

### SVG иконки

- Используются inline SVG
- Размеры: 24x24px (w-6 h-6) для обычных, 20x20px (w-5 h-5) для мелких
- Цвет: `text-white` для белых иконок
- Stroke-based иконки с `stroke-width="2"`

## Доступность

### Контрастность

- Белый текст на темном фоне обеспечивает высокий контраст
- Серый текст используется только для второстепенной информации

### Фокус

- Все интерактивные элементы имеют focus состояния
- Используется `focus:outline-none focus:border-blue-500`

### Семантика

- Используются семантические HTML теги (nav, section, footer)
- Правильная иерархия заголовков

## Рекомендации по использованию

1. **Всегда используйте темный фон** (`bg-gray-900`) как основу
2. **Синий цвет** (`bg-blue-500`) только для акцентов и кнопок
3. **Закругленные углы** для всех элементов (rounded-lg, rounded-xl, rounded-2xl)
4. **Плавные переходы** для всех интерактивных элементов
5. **Адаптивность** - всегда добавляйте responsive классы
6. **Консистентность** - используйте одинаковые отступы и размеры
7. **Минимализм** - избегайте лишних декоративных элементов

## Примеры использования

### Создание новой секции

```html
<section class="bg-gray-800/50 py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mb-16 text-center">
      <h2 class="mb-6 text-4xl font-bold text-white md:text-5xl">
        Заголовок секции
      </h2>
      <p class="mx-auto max-w-2xl text-xl text-gray-300">Описание секции</p>
    </div>
    <!-- Контент секции -->
  </div>
</section>
```

### Создание карточки

```html
<div
  class="rounded-2xl border border-gray-700 bg-gray-800 p-8 transition-colors hover:border-blue-500"
>
  <div
    class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500"
  >
    <!-- Иконка -->
  </div>
  <h3 class="mb-4 text-xl font-semibold text-white">Заголовок</h3>
  <p class="text-gray-300">Описание</p>
</div>
```
