<?php $value = get_field('front_card');
    if( $value ) { ?>
    <?php while( have_rows('front_card') ): the_row(); ?>
        <div class="card-container" data-id="card<?php echo get_the_ID(); ?>" data-categories="<?php $tags = get_sub_field( 'tags_card' ); if( $tags ): echo implode( ', ', $tags ); endif; ?>" style="<?php $value = get_sub_field('position_card');
    if( $value ) { ?><?php while( have_rows('position_card') ): the_row(); ?>position: absolute; top: <?php the_sub_field('top_position'); ?>px;left: <?php the_sub_field('bottom_position'); ?>px;<?php endwhile; ?><?php } ?>transform: rotate(<?php the_sub_field('angle_card'); ?>deg)">
            <div class="card-content" style="width: <?php the_sub_field('width_card'); ?>px; height: <?php the_sub_field('height_card'); ?>px;">
            <div class="card-front">
                
                <?php 
				$image = get_sub_field('image_recto');
				$size = 'full';
				if( $image ) {
					echo wp_get_attachment_image( $image, $size, false, array( 'class' => 'project-img', 'loading' => '' ) );
				}
				?>
                
                <div class="triangle-black">
                    <svg fill="none" height="81" viewBox="0 0 79 81" width="79" xmlns="http://www.w3.org/2000/svg"><path d="m0 81 79-81v81z" fill="#000" fill-opacity=".95"/></svg>
                </div>
                <button data-action="flip-to-back">
                    <svg fill="none" height="36" viewBox="0 0 33 36" width="33" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><mask id="a" fill="#000" height="36" maskUnits="userSpaceOnUse" width="33" x="0" y="0"><path d="m0 0h33v36h-33z" fill="#fff"/><path clip-rule="evenodd" d="m9.67129 5.52477c-4.30928.41594-7.67129 4.04254-7.67129 8.46493 0 .2762-.22386.5-.5.5s-.5-.2238-.5-.5c0-5.25399 4.24811-9.50471 9.5-9.50471.1733 0 .3342.0897.4253.23708.0911.14739.0994.33143.022.48643l-1.28554 2.57235c-.12344.24702-.42376.34719-.67077.22375-.24702-.12344-.34719-.42376-.22375-.67077zm21.82871 16.96973c.2761 0 .5.2238.5.5 0 5.254-4.2481 9.5047-9.5 9.5047-.1733 0-.3342-.0897-.4253-.2371-.0911-.1473-.0994-.3314-.022-.4864l1.2855-2.5723c.1235-.2471.4238-.3472.6708-.2238.247.1235.3472.4238.2238.6708l-.9041 1.809c4.3093-.4159 7.6713-4.0425 7.6713-8.4649 0-.2762.2239-.5.5-.5z" fill="#000" fill-rule="evenodd"/><path clip-rule="evenodd" d="m17.8846 13.5h-10.3846c-.55228 0-1 .4477-1 1v18.8462c0 .5522.44772 1 1 1h10.3846c.5523 0 1-.4478 1-1v-18.8462c0-.5523-.4477-1-1-1zm-10.3846-1c-1.10457 0-2 .8954-2 2v18.8462c0 1.1045.89543 2 2 2h10.3846c1.1046 0 2-.8955 2-2v-18.8462c0-1.1046-.8954-2-2-2z" fill="#000" fill-rule="evenodd"/><path clip-rule="evenodd" d="m12.6154 3.5c0-1.38071 1.1193-2.5 2.5-2.5h10.3846c1.3807 0 2.5 1.11929 2.5 2.5v18.8462c0 1.3807-1.1193 2.5-2.5 2.5h-3.5v-1h3.5c.8284 0 1.5-.6716 1.5-1.5v-18.8462c0-.82843-.6716-1.5-1.5-1.5h-10.3846c-.8284 0-1.5.67157-1.5 1.5v6.03846h-1z" fill="#000" fill-rule="evenodd"/></mask><g fill="#fff"><g clip-rule="evenodd" fill-rule="evenodd"><path d="m9.67129 5.52477c-4.30928.41594-7.67129 4.04254-7.67129 8.46493 0 .2762-.22386.5-.5.5s-.5-.2238-.5-.5c0-5.25399 4.24811-9.50471 9.5-9.50471.1733 0 .3342.0897.4253.23708.0911.14739.0994.33143.022.48643l-1.28554 2.57235c-.12344.24702-.42376.34719-.67077.22375-.24702-.12344-.34719-.42376-.22375-.67077zm21.82871 16.96973c.2761 0 .5.2238.5.5 0 5.254-4.2481 9.5047-9.5 9.5047-.1733 0-.3342-.0897-.4253-.2371-.0911-.1473-.0994-.3314-.022-.4864l1.2855-2.5723c.1235-.2471.4238-.3472.6708-.2238.247.1235.3472.4238.2238.6708l-.9041 1.809c4.3093-.4159 7.6713-4.0425 7.6713-8.4649 0-.2762.2239-.5.5-.5z"/><path d="m17.8846 13.5h-10.3846c-.55228 0-1 .4477-1 1v18.8462c0 .5522.44772 1 1 1h10.3846c.5523 0 1-.4478 1-1v-18.8462c0-.5523-.4477-1-1-1zm-10.3846-1c-1.10457 0-2 .8954-2 2v18.8462c0 1.1045.89543 2 2 2h10.3846c1.1046 0 2-.8955 2-2v-18.8462c0-1.1046-.8954-2-2-2z"/><path d="m12.6154 3.5c0-1.38071 1.1193-2.5 2.5-2.5h10.3846c1.3807 0 2.5 1.11929 2.5 2.5v18.8462c0 1.3807-1.1193 2.5-2.5 2.5h-3.5v-1h3.5c.8284 0 1.5-.6716 1.5-1.5v-18.8462c0-.82843-.6716-1.5-1.5-1.5h-10.3846c-.8284 0-1.5.67157-1.5 1.5v6.03846h-1z"/></g><path d="m9.67129 5.52477.26836.1341c.04878-.0976.04071-.21399-.02106-.30394s-.16751-.13926-.27612-.12878zm1.25401-.8027-.2552.15775zm.022.48643.2683.13411v-.00001zm-1.28554 2.57235.26836.13411zm-.67077.22375-.13411.26836zm-.22375-.67077.26836.13411zm13.30746 24.92827.2552-.1577zm-.022-.4864.2684.1341zm1.2855-2.5723.2684.1341zm.6708-.2238-.1341.2684zm.2238.6708-.2684-.1341zm-.9041 1.809-.2684-.1341c-.0487.0976-.0407.214.0211.304.0618.0899.1675.1392.2761.1288zm-1.3287-6.6132h-.3v.3h.3zm0-1v-.3h-.3v.3zm-8.3846-14.30774v.3h.3v-.3zm-1 0h-.3v.3h.3zm-10.3154 4.45124c0-4.26659 3.24335-7.7651 7.40012-8.16632l-.05765-.59723c-4.46181.43067-7.94247 4.18535-7.94247 8.76355zm-.8.8c.44183 0 .8-.3581.8-.8h-.6c0 .1105-.08954.2-.2.2zm-.8-.8c0 .4419.35817.8.8.8v-.6c-.11046 0-.2-.0895-.2-.2zm9.8-9.80471c-5.41773 0-9.8 4.38519-9.8 9.80471h.6c0-5.08845 4.11395-9.20471 9.2-9.20471zm.6805.37934c-.1458-.23581-.4033-.37934-.6805-.37934v.6c.0693 0 .1337.03588.1701.09483zm.0351.77827c.1239-.24798.1107-.54246-.0351-.77827l-.5104.31549c.0365.05895.0398.13257.0088.19457zm-1.28548 2.57236 1.28548-2.57235-.5367-.26822-1.2855 2.57236zm-1.07324.358c.39522.19751.87573.03723 1.07324-.358l-.53672-.26821c-.04937.0988-.1695.13887-.2683.0895zm-.358-1.07324c-.19751.39523-.03722.87573.358 1.07324l.26822-.53671c-.09881-.04938-.13888-.16951-.0895-.26831zm.90406-1.80906-.90406 1.80906.53672.26822.90405-1.80907zm22.89706 17.60384c0-.4418-.3582-.8-.8-.8v.6c.1105 0 .2.0895.2.2zm-9.8 9.8047c5.4177 0 9.8-4.3852 9.8-9.8047h-.6c0 5.0885-4.1139 9.2047-9.2 9.2047zm-.6805-.3793c.1458.2358.4033.3793.6805.3793v-.6c-.0693 0-.1337-.0359-.1701-.0948zm-.0351-.7783c-.1239.248-.1107.5425.0351.7783l.5104-.3155c-.0365-.059-.0398-.1326-.0088-.1946zm1.2855-2.5724-1.2855 2.5724.5367.2682 1.2855-2.5723zm1.0732-.3579c-.3952-.1976-.8757-.0373-1.0732.3579l.5367.2683c.0494-.0988.1695-.1389.2683-.0895zm.358 1.0732c.1975-.3952.0372-.8757-.358-1.0732l-.2682.5367c.0988.0493.1389.1695.0895.2683zm-.904 1.8091.904-1.8091-.5367-.2682-.9041 1.809zm7.1029-8.5991c0 4.2666-3.2434 7.7651-7.4001 8.1663l.0576.5973c4.4618-.4307 7.9425-4.1854 7.9425-8.7636zm.8-.8c-.4418 0-.8.3582-.8.8h.6c0-.1105.0895-.2.2-.2zm-24-8.3945h10.3846v-.6h-10.3846zm-.7.7c0-.3866.3134-.7.7-.7v-.6c-.71797 0-1.3.582-1.3 1.3zm0 18.8462v-18.8462h-.6v18.8462zm.7.7c-.3866 0-.7-.3134-.7-.7h-.6c0 .7179.58203 1.3 1.3 1.3zm10.3846 0h-10.3846v.6h10.3846zm.7-.7c0 .3866-.3134.7-.7.7v.6c.718 0 1.3-.5821 1.3-1.3zm0-18.8462v18.8462h.6v-18.8462zm-.7-.7c.3866 0 .7.3134.7.7h.6c0-.718-.582-1.3-1.3-1.3zm-12.0846.7c0-.9389.76112-1.7 1.7-1.7v-.6c-1.27026 0-2.3 1.0297-2.3 2.3zm0 18.8462v-18.8462h-.6v18.8462zm1.7 1.7c-.93888 0-1.7-.7612-1.7-1.7h-.6c0 1.2702 1.02975 2.3 2.3 2.3zm10.3846 0h-10.3846v.6h10.3846zm1.7-1.7c0 .9388-.7611 1.7-1.7 1.7v.6c1.2703 0 2.3-1.0298 2.3-2.3zm0-18.8462v18.8462h.6v-18.8462zm-1.7-1.7c.9389 0 1.7.7611 1.7 1.7h.6c0-1.2703-1.0297-2.3-2.3-2.3zm-10.3846 0h10.3846v-.6h-10.3846zm7.6154-12.1c-1.5464 0-2.8 1.2536-2.8 2.8h.6c0-1.21503.985-2.2 2.2-2.2zm10.3846 0h-10.3846v.6h10.3846zm2.8 2.8c0-1.5464-1.2536-2.8-2.8-2.8v.6c1.215 0 2.2.98497 2.2 2.2zm0 18.8462v-18.8462h-.6v18.8462zm-2.8 2.8c1.5464 0 2.8-1.2537 2.8-2.8h-.6c0 1.215-.985 2.2-2.2 2.2zm-3.5 0h3.5v-.6h-3.5zm-.3-1.3v1h.6v-1zm3.8-.3h-3.5v.6h3.5zm1.2-1.2c0 .6627-.5373 1.2-1.2 1.2v.6c.9941 0 1.8-.8059 1.8-1.8zm0-18.8462v18.8462h.6v-18.8462zm-1.2-1.2c.6627 0 1.2.53726 1.2 1.2h.6c0-.99411-.8059-1.8-1.8-1.8zm-10.3846 0h10.3846v-.6h-10.3846zm-1.2 1.2c0-.66274.5372-1.2 1.2-1.2v-.6c-.9941 0-1.8.80589-1.8 1.8zm0 6.03846v-6.03846h-.6v6.03846zm-1.3.3h1v-.6h-1zm-.3-6.33846v6.03846h.6v-6.03846z" mask="url(#a)"/></g></svg>
                </button>
            </div>

            <?php endwhile; ?> 
		    <?php } ?>
            
            <?php $value = get_field('back_card'); 
            if( $value ) { ?>
            <?php while( have_rows('back_card') ): the_row(); ?>
            <div class="card-back">
                <button class="open-details" data-target="details<?php echo get_the_ID(); ?>">More</button>
                <?php 
				$image = get_sub_field('image_verso');
				$size = 'full';
				if( $image ) {
					echo wp_get_attachment_image( $image, $size, false, array( 'class' => 'project-img', 'loading' => 'lazy' ) );
				}
				?>

                <button data-action="flip-to-front">
                    <svg fill="none" height="36" viewBox="0 0 33 36" width="33" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><mask id="a" fill="#000" height="36" maskUnits="userSpaceOnUse" width="33" x="0" y="0"><path d="m0 0h33v36h-33z" fill="#fff"/><path clip-rule="evenodd" d="m9.67129 5.52477c-4.30928.41594-7.67129 4.04254-7.67129 8.46493 0 .2762-.22386.5-.5.5s-.5-.2238-.5-.5c0-5.25399 4.24811-9.50471 9.5-9.50471.1733 0 .3342.0897.4253.23708.0911.14739.0994.33143.022.48643l-1.28554 2.57235c-.12344.24702-.42376.34719-.67077.22375-.24702-.12344-.34719-.42376-.22375-.67077zm21.82871 16.96973c.2761 0 .5.2238.5.5 0 5.254-4.2481 9.5047-9.5 9.5047-.1733 0-.3342-.0897-.4253-.2371-.0911-.1473-.0994-.3314-.022-.4864l1.2855-2.5723c.1235-.2471.4238-.3472.6708-.2238.247.1235.3472.4238.2238.6708l-.9041 1.809c4.3093-.4159 7.6713-4.0425 7.6713-8.4649 0-.2762.2239-.5.5-.5z" fill="#000" fill-rule="evenodd"/><path clip-rule="evenodd" d="m17.8846 13.5h-10.3846c-.55228 0-1 .4477-1 1v18.8462c0 .5522.44772 1 1 1h10.3846c.5523 0 1-.4478 1-1v-18.8462c0-.5523-.4477-1-1-1zm-10.3846-1c-1.10457 0-2 .8954-2 2v18.8462c0 1.1045.89543 2 2 2h10.3846c1.1046 0 2-.8955 2-2v-18.8462c0-1.1046-.8954-2-2-2z" fill="#000" fill-rule="evenodd"/><path clip-rule="evenodd" d="m12.6154 3.5c0-1.38071 1.1193-2.5 2.5-2.5h10.3846c1.3807 0 2.5 1.11929 2.5 2.5v18.8462c0 1.3807-1.1193 2.5-2.5 2.5h-3.5v-1h3.5c.8284 0 1.5-.6716 1.5-1.5v-18.8462c0-.82843-.6716-1.5-1.5-1.5h-10.3846c-.8284 0-1.5.67157-1.5 1.5v6.03846h-1z" fill="#000" fill-rule="evenodd"/></mask><g fill="#fff"><g clip-rule="evenodd" fill-rule="evenodd"><path d="m9.67129 5.52477c-4.30928.41594-7.67129 4.04254-7.67129 8.46493 0 .2762-.22386.5-.5.5s-.5-.2238-.5-.5c0-5.25399 4.24811-9.50471 9.5-9.50471.1733 0 .3342.0897.4253.23708.0911.14739.0994.33143.022.48643l-1.28554 2.57235c-.12344.24702-.42376.34719-.67077.22375-.24702-.12344-.34719-.42376-.22375-.67077zm21.82871 16.96973c.2761 0 .5.2238.5.5 0 5.254-4.2481 9.5047-9.5 9.5047-.1733 0-.3342-.0897-.4253-.2371-.0911-.1473-.0994-.3314-.022-.4864l1.2855-2.5723c.1235-.2471.4238-.3472.6708-.2238.247.1235.3472.4238.2238.6708l-.9041 1.809c4.3093-.4159 7.6713-4.0425 7.6713-8.4649 0-.2762.2239-.5.5-.5z"/><path d="m17.8846 13.5h-10.3846c-.55228 0-1 .4477-1 1v18.8462c0 .5522.44772 1 1 1h10.3846c.5523 0 1-.4478 1-1v-18.8462c0-.5523-.4477-1-1-1zm-10.3846-1c-1.10457 0-2 .8954-2 2v18.8462c0 1.1045.89543 2 2 2h10.3846c1.1046 0 2-.8955 2-2v-18.8462c0-1.1046-.8954-2-2-2z"/><path d="m12.6154 3.5c0-1.38071 1.1193-2.5 2.5-2.5h10.3846c1.3807 0 2.5 1.11929 2.5 2.5v18.8462c0 1.3807-1.1193 2.5-2.5 2.5h-3.5v-1h3.5c.8284 0 1.5-.6716 1.5-1.5v-18.8462c0-.82843-.6716-1.5-1.5-1.5h-10.3846c-.8284 0-1.5.67157-1.5 1.5v6.03846h-1z"/></g><path d="m9.67129 5.52477.26836.1341c.04878-.0976.04071-.21399-.02106-.30394s-.16751-.13926-.27612-.12878zm1.25401-.8027-.2552.15775zm.022.48643.2683.13411v-.00001zm-1.28554 2.57235.26836.13411zm-.67077.22375-.13411.26836zm-.22375-.67077.26836.13411zm13.30746 24.92827.2552-.1577zm-.022-.4864.2684.1341zm1.2855-2.5723.2684.1341zm.6708-.2238-.1341.2684zm.2238.6708-.2684-.1341zm-.9041 1.809-.2684-.1341c-.0487.0976-.0407.214.0211.304.0618.0899.1675.1392.2761.1288zm-1.3287-6.6132h-.3v.3h.3zm0-1v-.3h-.3v.3zm-8.3846-14.30774v.3h.3v-.3zm-1 0h-.3v.3h.3zm-10.3154 4.45124c0-4.26659 3.24335-7.7651 7.40012-8.16632l-.05765-.59723c-4.46181.43067-7.94247 4.18535-7.94247 8.76355zm-.8.8c.44183 0 .8-.3581.8-.8h-.6c0 .1105-.08954.2-.2.2zm-.8-.8c0 .4419.35817.8.8.8v-.6c-.11046 0-.2-.0895-.2-.2zm9.8-9.80471c-5.41773 0-9.8 4.38519-9.8 9.80471h.6c0-5.08845 4.11395-9.20471 9.2-9.20471zm.6805.37934c-.1458-.23581-.4033-.37934-.6805-.37934v.6c.0693 0 .1337.03588.1701.09483zm.0351.77827c.1239-.24798.1107-.54246-.0351-.77827l-.5104.31549c.0365.05895.0398.13257.0088.19457zm-1.28548 2.57236 1.28548-2.57235-.5367-.26822-1.2855 2.57236zm-1.07324.358c.39522.19751.87573.03723 1.07324-.358l-.53672-.26821c-.04937.0988-.1695.13887-.2683.0895zm-.358-1.07324c-.19751.39523-.03722.87573.358 1.07324l.26822-.53671c-.09881-.04938-.13888-.16951-.0895-.26831zm.90406-1.80906-.90406 1.80906.53672.26822.90405-1.80907zm22.89706 17.60384c0-.4418-.3582-.8-.8-.8v.6c.1105 0 .2.0895.2.2zm-9.8 9.8047c5.4177 0 9.8-4.3852 9.8-9.8047h-.6c0 5.0885-4.1139 9.2047-9.2 9.2047zm-.6805-.3793c.1458.2358.4033.3793.6805.3793v-.6c-.0693 0-.1337-.0359-.1701-.0948zm-.0351-.7783c-.1239.248-.1107.5425.0351.7783l.5104-.3155c-.0365-.059-.0398-.1326-.0088-.1946zm1.2855-2.5724-1.2855 2.5724.5367.2682 1.2855-2.5723zm1.0732-.3579c-.3952-.1976-.8757-.0373-1.0732.3579l.5367.2683c.0494-.0988.1695-.1389.2683-.0895zm.358 1.0732c.1975-.3952.0372-.8757-.358-1.0732l-.2682.5367c.0988.0493.1389.1695.0895.2683zm-.904 1.8091.904-1.8091-.5367-.2682-.9041 1.809zm7.1029-8.5991c0 4.2666-3.2434 7.7651-7.4001 8.1663l.0576.5973c4.4618-.4307 7.9425-4.1854 7.9425-8.7636zm.8-.8c-.4418 0-.8.3582-.8.8h.6c0-.1105.0895-.2.2-.2zm-24-8.3945h10.3846v-.6h-10.3846zm-.7.7c0-.3866.3134-.7.7-.7v-.6c-.71797 0-1.3.582-1.3 1.3zm0 18.8462v-18.8462h-.6v18.8462zm.7.7c-.3866 0-.7-.3134-.7-.7h-.6c0 .7179.58203 1.3 1.3 1.3zm10.3846 0h-10.3846v.6h10.3846zm.7-.7c0 .3866-.3134.7-.7.7v.6c.718 0 1.3-.5821 1.3-1.3zm0-18.8462v18.8462h.6v-18.8462zm-.7-.7c.3866 0 .7.3134.7.7h.6c0-.718-.582-1.3-1.3-1.3zm-12.0846.7c0-.9389.76112-1.7 1.7-1.7v-.6c-1.27026 0-2.3 1.0297-2.3 2.3zm0 18.8462v-18.8462h-.6v18.8462zm1.7 1.7c-.93888 0-1.7-.7612-1.7-1.7h-.6c0 1.2702 1.02975 2.3 2.3 2.3zm10.3846 0h-10.3846v.6h10.3846zm1.7-1.7c0 .9388-.7611 1.7-1.7 1.7v.6c1.2703 0 2.3-1.0298 2.3-2.3zm0-18.8462v18.8462h.6v-18.8462zm-1.7-1.7c.9389 0 1.7.7611 1.7 1.7h.6c0-1.2703-1.0297-2.3-2.3-2.3zm-10.3846 0h10.3846v-.6h-10.3846zm7.6154-12.1c-1.5464 0-2.8 1.2536-2.8 2.8h.6c0-1.21503.985-2.2 2.2-2.2zm10.3846 0h-10.3846v.6h10.3846zm2.8 2.8c0-1.5464-1.2536-2.8-2.8-2.8v.6c1.215 0 2.2.98497 2.2 2.2zm0 18.8462v-18.8462h-.6v18.8462zm-2.8 2.8c1.5464 0 2.8-1.2537 2.8-2.8h-.6c0 1.215-.985 2.2-2.2 2.2zm-3.5 0h3.5v-.6h-3.5zm-.3-1.3v1h.6v-1zm3.8-.3h-3.5v.6h3.5zm1.2-1.2c0 .6627-.5373 1.2-1.2 1.2v.6c.9941 0 1.8-.8059 1.8-1.8zm0-18.8462v18.8462h.6v-18.8462zm-1.2-1.2c.6627 0 1.2.53726 1.2 1.2h.6c0-.99411-.8059-1.8-1.8-1.8zm-10.3846 0h10.3846v-.6h-10.3846zm-1.2 1.2c0-.66274.5372-1.2 1.2-1.2v-.6c-.9941 0-1.8.80589-1.8 1.8zm0 6.03846v-6.03846h-.6v6.03846zm-1.3.3h1v-.6h-1zm-.3-6.33846v6.03846h.6v-6.03846z" mask="url(#a)"/></g></svg>
                </button>
            </div>
            <?php endwhile; ?> 
            <?php } else { ?>
                <div class="card-back">
                😀
                <button data-action="flip-to-front">
                    <svg fill="none" height="36" viewBox="0 0 33 36" width="33" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><mask id="a" fill="#000" height="36" maskUnits="userSpaceOnUse" width="33" x="0" y="0"><path d="m0 0h33v36h-33z" fill="#fff"/><path clip-rule="evenodd" d="m9.67129 5.52477c-4.30928.41594-7.67129 4.04254-7.67129 8.46493 0 .2762-.22386.5-.5.5s-.5-.2238-.5-.5c0-5.25399 4.24811-9.50471 9.5-9.50471.1733 0 .3342.0897.4253.23708.0911.14739.0994.33143.022.48643l-1.28554 2.57235c-.12344.24702-.42376.34719-.67077.22375-.24702-.12344-.34719-.42376-.22375-.67077zm21.82871 16.96973c.2761 0 .5.2238.5.5 0 5.254-4.2481 9.5047-9.5 9.5047-.1733 0-.3342-.0897-.4253-.2371-.0911-.1473-.0994-.3314-.022-.4864l1.2855-2.5723c.1235-.2471.4238-.3472.6708-.2238.247.1235.3472.4238.2238.6708l-.9041 1.809c4.3093-.4159 7.6713-4.0425 7.6713-8.4649 0-.2762.2239-.5.5-.5z" fill="#000" fill-rule="evenodd"/><path clip-rule="evenodd" d="m17.8846 13.5h-10.3846c-.55228 0-1 .4477-1 1v18.8462c0 .5522.44772 1 1 1h10.3846c.5523 0 1-.4478 1-1v-18.8462c0-.5523-.4477-1-1-1zm-10.3846-1c-1.10457 0-2 .8954-2 2v18.8462c0 1.1045.89543 2 2 2h10.3846c1.1046 0 2-.8955 2-2v-18.8462c0-1.1046-.8954-2-2-2z" fill="#000" fill-rule="evenodd"/><path clip-rule="evenodd" d="m12.6154 3.5c0-1.38071 1.1193-2.5 2.5-2.5h10.3846c1.3807 0 2.5 1.11929 2.5 2.5v18.8462c0 1.3807-1.1193 2.5-2.5 2.5h-3.5v-1h3.5c.8284 0 1.5-.6716 1.5-1.5v-18.8462c0-.82843-.6716-1.5-1.5-1.5h-10.3846c-.8284 0-1.5.67157-1.5 1.5v6.03846h-1z" fill="#000" fill-rule="evenodd"/></mask><g fill="#fff"><g clip-rule="evenodd" fill-rule="evenodd"><path d="m9.67129 5.52477c-4.30928.41594-7.67129 4.04254-7.67129 8.46493 0 .2762-.22386.5-.5.5s-.5-.2238-.5-.5c0-5.25399 4.24811-9.50471 9.5-9.50471.1733 0 .3342.0897.4253.23708.0911.14739.0994.33143.022.48643l-1.28554 2.57235c-.12344.24702-.42376.34719-.67077.22375-.24702-.12344-.34719-.42376-.22375-.67077zm21.82871 16.96973c.2761 0 .5.2238.5.5 0 5.254-4.2481 9.5047-9.5 9.5047-.1733 0-.3342-.0897-.4253-.2371-.0911-.1473-.0994-.3314-.022-.4864l1.2855-2.5723c.1235-.2471.4238-.3472.6708-.2238.247.1235.3472.4238.2238.6708l-.9041 1.809c4.3093-.4159 7.6713-4.0425 7.6713-8.4649 0-.2762.2239-.5.5-.5z"/><path d="m17.8846 13.5h-10.3846c-.55228 0-1 .4477-1 1v18.8462c0 .5522.44772 1 1 1h10.3846c.5523 0 1-.4478 1-1v-18.8462c0-.5523-.4477-1-1-1zm-10.3846-1c-1.10457 0-2 .8954-2 2v18.8462c0 1.1045.89543 2 2 2h10.3846c1.1046 0 2-.8955 2-2v-18.8462c0-1.1046-.8954-2-2-2z"/><path d="m12.6154 3.5c0-1.38071 1.1193-2.5 2.5-2.5h10.3846c1.3807 0 2.5 1.11929 2.5 2.5v18.8462c0 1.3807-1.1193 2.5-2.5 2.5h-3.5v-1h3.5c.8284 0 1.5-.6716 1.5-1.5v-18.8462c0-.82843-.6716-1.5-1.5-1.5h-10.3846c-.8284 0-1.5.67157-1.5 1.5v6.03846h-1z"/></g><path d="m9.67129 5.52477.26836.1341c.04878-.0976.04071-.21399-.02106-.30394s-.16751-.13926-.27612-.12878zm1.25401-.8027-.2552.15775zm.022.48643.2683.13411v-.00001zm-1.28554 2.57235.26836.13411zm-.67077.22375-.13411.26836zm-.22375-.67077.26836.13411zm13.30746 24.92827.2552-.1577zm-.022-.4864.2684.1341zm1.2855-2.5723.2684.1341zm.6708-.2238-.1341.2684zm.2238.6708-.2684-.1341zm-.9041 1.809-.2684-.1341c-.0487.0976-.0407.214.0211.304.0618.0899.1675.1392.2761.1288zm-1.3287-6.6132h-.3v.3h.3zm0-1v-.3h-.3v.3zm-8.3846-14.30774v.3h.3v-.3zm-1 0h-.3v.3h.3zm-10.3154 4.45124c0-4.26659 3.24335-7.7651 7.40012-8.16632l-.05765-.59723c-4.46181.43067-7.94247 4.18535-7.94247 8.76355zm-.8.8c.44183 0 .8-.3581.8-.8h-.6c0 .1105-.08954.2-.2.2zm-.8-.8c0 .4419.35817.8.8.8v-.6c-.11046 0-.2-.0895-.2-.2zm9.8-9.80471c-5.41773 0-9.8 4.38519-9.8 9.80471h.6c0-5.08845 4.11395-9.20471 9.2-9.20471zm.6805.37934c-.1458-.23581-.4033-.37934-.6805-.37934v.6c.0693 0 .1337.03588.1701.09483zm.0351.77827c.1239-.24798.1107-.54246-.0351-.77827l-.5104.31549c.0365.05895.0398.13257.0088.19457zm-1.28548 2.57236 1.28548-2.57235-.5367-.26822-1.2855 2.57236zm-1.07324.358c.39522.19751.87573.03723 1.07324-.358l-.53672-.26821c-.04937.0988-.1695.13887-.2683.0895zm-.358-1.07324c-.19751.39523-.03722.87573.358 1.07324l.26822-.53671c-.09881-.04938-.13888-.16951-.0895-.26831zm.90406-1.80906-.90406 1.80906.53672.26822.90405-1.80907zm22.89706 17.60384c0-.4418-.3582-.8-.8-.8v.6c.1105 0 .2.0895.2.2zm-9.8 9.8047c5.4177 0 9.8-4.3852 9.8-9.8047h-.6c0 5.0885-4.1139 9.2047-9.2 9.2047zm-.6805-.3793c.1458.2358.4033.3793.6805.3793v-.6c-.0693 0-.1337-.0359-.1701-.0948zm-.0351-.7783c-.1239.248-.1107.5425.0351.7783l.5104-.3155c-.0365-.059-.0398-.1326-.0088-.1946zm1.2855-2.5724-1.2855 2.5724.5367.2682 1.2855-2.5723zm1.0732-.3579c-.3952-.1976-.8757-.0373-1.0732.3579l.5367.2683c.0494-.0988.1695-.1389.2683-.0895zm.358 1.0732c.1975-.3952.0372-.8757-.358-1.0732l-.2682.5367c.0988.0493.1389.1695.0895.2683zm-.904 1.8091.904-1.8091-.5367-.2682-.9041 1.809zm7.1029-8.5991c0 4.2666-3.2434 7.7651-7.4001 8.1663l.0576.5973c4.4618-.4307 7.9425-4.1854 7.9425-8.7636zm.8-.8c-.4418 0-.8.3582-.8.8h.6c0-.1105.0895-.2.2-.2zm-24-8.3945h10.3846v-.6h-10.3846zm-.7.7c0-.3866.3134-.7.7-.7v-.6c-.71797 0-1.3.582-1.3 1.3zm0 18.8462v-18.8462h-.6v18.8462zm.7.7c-.3866 0-.7-.3134-.7-.7h-.6c0 .7179.58203 1.3 1.3 1.3zm10.3846 0h-10.3846v.6h10.3846zm.7-.7c0 .3866-.3134.7-.7.7v.6c.718 0 1.3-.5821 1.3-1.3zm0-18.8462v18.8462h.6v-18.8462zm-.7-.7c.3866 0 .7.3134.7.7h.6c0-.718-.582-1.3-1.3-1.3zm-12.0846.7c0-.9389.76112-1.7 1.7-1.7v-.6c-1.27026 0-2.3 1.0297-2.3 2.3zm0 18.8462v-18.8462h-.6v18.8462zm1.7 1.7c-.93888 0-1.7-.7612-1.7-1.7h-.6c0 1.2702 1.02975 2.3 2.3 2.3zm10.3846 0h-10.3846v.6h10.3846zm1.7-1.7c0 .9388-.7611 1.7-1.7 1.7v.6c1.2703 0 2.3-1.0298 2.3-2.3zm0-18.8462v18.8462h.6v-18.8462zm-1.7-1.7c.9389 0 1.7.7611 1.7 1.7h.6c0-1.2703-1.0297-2.3-2.3-2.3zm-10.3846 0h10.3846v-.6h-10.3846zm7.6154-12.1c-1.5464 0-2.8 1.2536-2.8 2.8h.6c0-1.21503.985-2.2 2.2-2.2zm10.3846 0h-10.3846v.6h10.3846zm2.8 2.8c0-1.5464-1.2536-2.8-2.8-2.8v.6c1.215 0 2.2.98497 2.2 2.2zm0 18.8462v-18.8462h-.6v18.8462zm-2.8 2.8c1.5464 0 2.8-1.2537 2.8-2.8h-.6c0 1.215-.985 2.2-2.2 2.2zm-3.5 0h3.5v-.6h-3.5zm-.3-1.3v1h.6v-1zm3.8-.3h-3.5v.6h3.5zm1.2-1.2c0 .6627-.5373 1.2-1.2 1.2v.6c.9941 0 1.8-.8059 1.8-1.8zm0-18.8462v18.8462h.6v-18.8462zm-1.2-1.2c.6627 0 1.2.53726 1.2 1.2h.6c0-.99411-.8059-1.8-1.8-1.8zm-10.3846 0h10.3846v-.6h-10.3846zm-1.2 1.2c0-.66274.5372-1.2 1.2-1.2v-.6c-.9941 0-1.8.80589-1.8 1.8zm0 6.03846v-6.03846h-.6v6.03846zm-1.3.3h1v-.6h-1zm-.3-6.33846v6.03846h.6v-6.03846z" mask="url(#a)"/></g></svg>
                </button>
            </div>
            <?php } ?>

            </div>
        </div>


        <style>
            .open-details {
                position: absolute;
                color: #fff;
                top: 6px;
                right: 6px;
            }

            .enlarge-btn svg {
                width: 24px;
                height: 24px;
            }


        </style>