<img{!! $attributeString !!}@if($loadingAttributeValue) loading="{{ $loadingAttributeValue }}"@endif srcset="{{ $media->getSrcset($conversion) }}" class="w-100 rounded-2 shadow-6" src="{{ $media->getUrl($conversion) }}" width="{{ $width }}" height="{{ $height }}">