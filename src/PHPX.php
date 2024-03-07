<?php

declare(strict_types=1);

namespace Buttress;

use DOMComment;
use DOMDocument;
use DOMDocumentFragment;
use DOMElement;
use DOMImplementation;
use DOMNode;

/**
 * @method DOMNode a(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode abbr(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode acronym(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode address(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode animate(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode animateMotion(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode animateTransform(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode area(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode article(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode aside(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode audio(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode b(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode base(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode bdi(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode bdo(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode big(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode blockquote(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode body(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode br(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode button(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode canvas(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode caption(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode center(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode circle(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode cite(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode clipPath(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode code(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode col(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode colgroup(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode data(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode datalist(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode dd(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode defs(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode del(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode desc(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode details(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode dfn(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode dialog(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode dir(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode div(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode dl(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode dt(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode ellipse(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode em(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode embed(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feBlend(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feColorMatrix(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feComponentTransfer(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feComposite(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feConvolveMatrix(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feDiffuseLighting(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feDisplacementMap(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feDistantLight(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feDropShadow(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feFlood(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feFuncA(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feFuncB(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feFuncG(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feFuncR(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feGaussianBlur(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feImage(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feMerge(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feMergeNode(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feMorphology(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feOffset(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode fePointLight(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feSpecularLighting(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feSpotLight(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feTile(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode feTurbulence(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode fieldset(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode figcaption(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode figure(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode filter(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode font(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode footer(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode foreignObject(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode form(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode frame(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode frameset(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode g(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode h1(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode h2(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode h3(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode h4(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode h5(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode h6(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode head(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode header(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode hgroup(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode hr(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode html(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode i(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode iframe(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode image(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode img(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode input(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode ins(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode kbd(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode label(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode legend(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode li(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode line(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode linearGradient(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode link(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode main(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode map(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode mark(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode marker(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode marquee(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode mask(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode math(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode menu(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode menuitem(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode meta(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode metadata(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode meter(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode mpath(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode nav(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode nobr(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode noembed(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode noframes(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode noscript(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode object(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode ol(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode optgroup(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode option(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode output(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode p(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode param(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode path(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode pattern(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode picture(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode plaintext(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode polygon(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode polyline(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode portal(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode pre(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode progress(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode q(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode radialGradient(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode rb(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode rect(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode rp(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode rt(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode rtc(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode ruby(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode s(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode samp(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode script(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode search(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode section(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode select(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode set(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode slot(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode small(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode source(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode span(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode stop(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode strike(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode strong(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode style(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode sub(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode summary(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode sup(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode svg(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode switch(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode symbol(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode table(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode tbody(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode td(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode template(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode text(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode textPath(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode textarea(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode tfoot(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode th(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode thead(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode time(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode title(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode tr(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode track(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode tspan(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode tt(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode u(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode ul(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode use(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode var(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode video(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode view(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode wbr(mixed ...$attributes, DOMNode|string|array $c = [])
 * @method DOMNode xmp(mixed ...$attributes, DOMNode|string|array $c = [])
 */
class PHPX
{
    protected const CORRECT = [
        'use_credentials' => 'use-credentials',
        'moz_opaque' => 'moz-opaque',
        'accept_charset' => 'accept-charset',
        'no_referrer' => 'no-referrer',
        'no_referrer_when_downgrade' => 'no-referrer-when-downgrade',
        'origin_when_cross_origin' => 'origin-when-cross-origin',
        'same_origin' => 'same-origin',
        'strict_origin' => 'strict-origin',
        'strict_origin_when_cross_origin' => 'strict-origin-when-cross-origin',
        'unsafe_url' => 'unsafe-url',
        'allow_downloads' => 'allow-downloads',
        'allow_downloads_without_user_activation' => 'allow-downloads-without-user-activation',
        'allow_forms' => 'allow-forms',
        'allow_modals' => 'allow-modals',
        'allow_orientation_lock' => 'allow-orientation-lock',
        'allow_pointer_lock' => 'allow-pointer-lock',
        'allow_popups' => 'allow-popups',
        'allow_popups_to_escape_sandbox' => 'allow-popups-to-escape-sandbox',
        'allow_presentation' => 'allow-presentation',
        'allow_same_origin' => 'allow-same-origin',
        'allow_scripts' => 'allow-scripts',
        'allow_storage_access_by_user_activation' => 'allow-storage-access-by-user-activation',
        'allow_top_navigation' => 'allow-top-navigation',
        'allow_top_navigation_by_user_activation' => 'allow-top-navigation-by-user-activation',
        'allow_top_navigation_to_custom_protocols' => 'allow-top-navigation-to-custom-protocols',
        'http_equiv' => 'http-equiv',
        'stop_color' => 'stop-color',
        'stop_opacity' => 'stop-opacity',
        'alignment_baseline' => 'alignment-baseline',
        'baseline_shift' => 'baseline-shift',
        'clip_path' => 'clip-path',
        'clip_rule' => 'clip-rule',
        'color_interpolation' => 'color-interpolation',
        'color_interpolation_filters' => 'color-interpolation-filters',
        'dominant_baseline' => 'dominant-baseline',
        'fill_opacity' => 'fill-opacity',
        'fill_rule' => 'fill-rule',
        'flood_color' => 'flood-color',
        'flood_opacity' => 'flood-opacity',
        'font_family' => 'font-family',
        'font_size' => 'font-size',
        'font_size_adjust' => 'font-size-adjust',
        'font_stretch' => 'font-stretch',
        'font_style' => 'font-style',
        'font_variant' => 'font-variant',
        'font_weight' => 'font-weight',
        'image_rendering' => 'image-rendering',
        'letter_spacing' => 'letter-spacing',
        'lighting_color' => 'lighting-color',
        'marker_end' => 'marker-end',
        'marker_mid' => 'marker-mid',
        'marker_start' => 'marker-start',
        'overline_position' => 'overline-position',
        'overline_thickness' => 'overline-thickness',
        'paint_order' => 'paint-order',
        'pointer_events' => 'pointer-events',
        'shape_rendering' => 'shape-rendering',
        'strikethrough_position' => 'strikethrough-position',
        'strikethrough_thickness' => 'strikethrough-thickness',
        'stroke_dasharray' => 'stroke-dasharray',
        'stroke_dashoffset' => 'stroke-dashoffset',
        'stroke_linecap' => 'stroke-linecap',
        'stroke_linejoin' => 'stroke-linejoin',
        'stroke_miterlimit' => 'stroke-miterlimit',
        'stroke_opacity' => 'stroke-opacity',
        'stroke_width' => 'stroke-width',
        'text_anchor' => 'text-anchor',
        'text_decoration' => 'text-decoration',
        'text_rendering' => 'text-rendering',
        'transform_origin' => 'transform-origin',
        'underline_position' => 'underline-position',
        'underline_thickness' => 'underline-thickness',
        'unicode_bidi' => 'unicode-bidi',
        'vector_effect' => 'vector-effect',
        'word_spacing' => 'word-spacing',
        'writing_mode' => 'writing-mode',
    ];

    protected array $replace = [];

    protected readonly DOMImplementation $implementation;

    public readonly DOMDocument $dom;

    public function __construct()
    {
        $this->implementation = new DOMImplementation();
        $type = $this->implementation->createDocumentType('html');
        $this->dom = $this->implementation->createDocument(doctype: $type);
    }

    public function __call(string $method, array $args): DOMElement
    {
        $c = $args['c'] ?? [];
        $data = $args['data'] ?? [];
        $aria = $args['aria'] ?? [];

        $attributes = $args['attributes'] ?? [];
        unset($args['c'], $args['data'], $args['aria'], $args['attributes']);

        foreach ($args as $key => $value) {
            $attributes[$key] = $value;
        }

        return $this->element($method, $attributes, $data, $aria, $c);
    }

    public function element(
        string $tag,
        array $attributes = [],
        array $data = [],
        array $aria = [],
        array|DOMNode|string $c = [],
    ): DOMElement {
        if (!is_array($c)) {
            $c = [$c];
        }

        foreach (self::CORRECT as $from => $to) {
            if (isset($attributes[$from])) {
                $attributes[$to] = $attributes[$from];
                unset($attributes[$from]);
            }
        }

        foreach ($data as $key => $value) {
            $attributes['data-' . $key] = $value;
        }
        foreach ($aria as $key => $value) {
            $attributes['aria-' . $key] = $value;
        }
        $element = $this->dom->createElement($tag);
        foreach ($attributes as $key => $value) {
            if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            }
            if ($value !== null) {
                $element->setAttribute($key, $value);
            }
        }

        $element->append(...$c);
        return $element;
    }

    public function raw(string $value): DOMDocumentFragment
    {
        // This is required because a value might be an invalid HTML string like '<foo' and DOM doesn't like that
        $key = '{{' . uniqid('PHPX_REPLACE%%', true) . '}}';
        $fragment = $this->dom->createDocumentFragment();
        if ($fragment === false) {
            throw new \RuntimeException('Unable to create DOM Fragment.');
        }
        $fragment->textContent = $key;
        $this->replace[$key] = $value;

        return $fragment;
    }

    public function comment(string $comment): DOMComment
    {
        return $this->dom->createComment($comment);
    }

    /**
     * @template T of mixed
     * @template TKey of array-key
     *
     * @param  iterable<TKey, T>  $list
     * @param  (callable(T, TKey): list<DOMNode>)  $do
     * @return list<DOMNode>
     */
    public function foreach(iterable $list, callable $do): array
    {
        $nodes = [];
        foreach ($list as $key => $value) {
            $nodes[] = $do($value, $key);
        }

        return $nodes;
    }

    /**
     * @param  callable(): list<DOMNode>  $do
     * @param  null|callable(): list<DOMNode>  $else
     * @return list<DOMNode>
     */
    public function if(bool $condition, callable $do, ?callable $else = null): array
    {
        $result = [];
        if ($condition) {
            $result = $do();
        } elseif ($else !== null) {
            $result = $else();
        }

        if (!is_array($result)) {
            $result = [$result];
        }

        return $result;
    }

    /**
     * @template T
     * @template TReturn
     *
     * @param  T  $value
     * @param  callable(T): TReturn  $callable
     * @return TReturn
     */
    public function with(mixed $value, callable $callable)
    {
        return $callable($value);
    }

    protected function handleReplacements(string $result): string
    {
        return str_replace(array_keys($this->replace), array_values($this->replace), $result);
    }

    public function render(DOMNode ...$nodes): string
    {
        // If the sole node passed is an HTML element, render entire document include doctype
        if (count($nodes) === 1 && $nodes[0] instanceof DOMElement && $nodes[0]->tagName === 'html') {
            $this->dom->append($nodes[0]);
            $result = $this->handleReplacements($this->dom->saveHTML());
            $this->dom->removeChild($nodes[0]);

            return $result;
        }

        $result = '';
        foreach ($nodes as $node) {
            $result .= $this->dom->saveHTML($node);
        }

        return $this->handleReplacements($result);
    }

    public function out(DOMNode ...$nodes): void
    {
        echo $this->render(...$nodes);
    }
}