'use client';

import { useEffect, useState, ReactNode } from 'react';

type Direction = 'left' | 'right' | 'up' | 'down';

interface ScrollAnimationWrapperProps {
  direction?: Direction;
  duration?: number;
  delay?: number;
  triggerOffset?: number;
  children: ReactNode;
}

export const ScrollAnimationWrapper: React.FC<ScrollAnimationWrapperProps> = ({
  direction = 'up',
  duration = 1000,
  delay = 0,
  triggerOffset = 0,
  children,
}) => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      const element = document.getElementById('skills');
      if (!element) return;

      const scrollPosition = window.scrollY;
      const triggerPosition =
        element.getBoundingClientRect().top + scrollPosition - window.innerHeight + triggerOffset;

      if (scrollPosition > triggerPosition) {
        setIsVisible(true);
      }
    };

    window.addEventListener('scroll', handleScroll);
    return () => {
      window.removeEventListener('scroll', handleScroll);
    };
  }, [triggerOffset]);

  const animationStyle = {
    transition: `all ${duration}ms ease-in-out ${delay}ms`,
    opacity: isVisible ? 1 : 0,
    transform: isVisible ? 'translate(0, 0)' : getTransform(direction),
  };

  return (
    <div style={animationStyle}>
      {children}
    </div>
  );
};

// Helper to calculate transform based on direction
const getTransform = (direction: Direction): string => {
  switch (direction) {
    case 'left':
      return 'translateX(-100%)';
    case 'right':
      return 'translateX(100%)';
    case 'up':
      return 'translateY(-100%)';
    case 'down':
      return 'translateY(100%)';
    default:
      return 'translateY(0)';
  }
};
